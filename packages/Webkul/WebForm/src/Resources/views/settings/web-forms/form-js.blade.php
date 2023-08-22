(function() {
    var version = parseInt(Math.random() * 10000);

    var webFormId = "{{ $webForm->id }}";

    var content = document.createElement('div');

    var scriptTag = document.currentScript || document.getElementById('artcrm_' + webFormId);

    scriptTag.parentElement.appendChild(content);

    var formHTML = `{!! view('web_form::settings.web-forms.form-js.form', compact('webForm'))->render() !!}`;

    content.innerHTML = '<div id="artcrm-content-container-' + webFormId + '" class="artcrm-content-container artcrm_' + webFormId + '">' + formHTML + '</div>';

    var script = document.createElement('script');

    script.src = '{{ asset('vendor/webkul/web-form/assets/js/web-form.js') }}';

    script.onload = function() {
        flatpickr(".form-group.date input", {
            allowInput: true,
            altFormat: "Y-m-d",
            dateFormat: "Y-m-d",
            weekNumbers: true,
        });

        flatpickr(".form-group.datetime input", {
            allowInput: true,
            altFormat: "Y-m-d H:i:S",
            dateFormat: "Y-m-d H:i:S",
            enableTime: true,
            time_24hr: true,
            weekNumbers: true,
        });

        var data = null;

        $('.button-group button').on('click', function() {
            data = $("#artcrmWebForm").serializeArray();

            $("#artcrmWebForm").validate({
                submitHandler: function(form) {

                    document.querySelector('#loaderDiv').classList.add('loaderDiv');

                    document.querySelector('#imgSpinner').classList.add('imgSpinner');

                    $.ajax({
                        url: "{{ route('admin.settings.web_forms.form_store', $webForm->id) }}",
                        type: 'post',
                        data: data,
                        headers: {
                            'X-CSRF-TOKEN': "{{ csrf_token() }}"
                        },
                        dataType: 'json',
                        success: function (data) {

                            document.querySelector('#loaderDiv').classList.remove('loaderDiv');

                            document.querySelector('#imgSpinner').classList.remove('imgSpinner');

                            var validator = $("#artcrmWebForm").validate();

                            if (data.message) {
                                $('.alert-wrapper .alert p').text(data.message);

                                $('.alert-wrapper').show();
                            } else {
                                window.location.href = data.redirect;
                            }

                            $("#artcrmWebForm").trigger("reset");
                        },

                        error: function (data) {

                            document.querySelector('#loaderDiv').classList.remove('loaderDiv');

                            document.querySelector('#imgSpinner').classList.remove('imgSpinner');
                            
                            var validator = $("#artcrmWebForm").validate();

                            for (var key in data.responseJSON.errors) {
                                var inputNames = [];
                    
                                key.split('.').forEach(function(chunk, index) {
                                    if(index) {
                                        inputNames.push('[' + chunk + ']')
                                    } else {
                                        inputNames.push(chunk)
                                    }
                                })
            
                                var inputName = inputNames.join('');

                                var error = {};

                                error[inputName] = data.responseJSON.errors[key][0];

                                validator.showErrors(error);
                            }
                        }
                    });
                }
            });
        });

        $('.alert-wrapper .icon').on('click', function() {
            $('.alert-wrapper').hide();

        });
    };

    content.appendChild(script);
})()