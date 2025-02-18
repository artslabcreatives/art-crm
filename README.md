<p align="center">
<a href="http://artcrmcrm.com"><img src="https://bagisto.com/wp-content/uploads/2021/06/bagisto-logo.png" alt="Total Downloads"></a>
</p>

<p align="center">
<a href="https://packagist.org/packages/artcrm/laravel-crm"><img src="https://poser.pugx.org/artcrm/laravel-crm/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/artcrm/laravel-crm"><img src="https://poser.pugx.org/artcrm/laravel-crm/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/artcrm/laravel-crm"><img src="https://poser.pugx.org/artcrm/laravel-crm/license.svg" alt="License"></a>
</p>

## Topics

1. [Introduction](#introduction)
2. [Documentation](#documentation)
3. [Requirements](#requirements)
4. [Installation & Configuration](#installation-and-configuration)
5. [License](#license)
6. [Security Vulnerabilities](#security-vulnerabilities)

### Introduction

[Art CRM](https://artcrmcrm.com) is a hand tailored CRM framework built on some of the hottest opensource technologies
such as [Laravel](https://laravel.com) (a [PHP](https://secure.php.net/) framework) and [Vue.js](https://vuejs.org)
a progressive Javascript framework.

**Free & Opensource Laravel CRM solution for SMEs and Enterprises for complete customer lifecycle management.**

**Read our documentation: [Art CRM Docs](https://devdocs.artcrmcrm.com/)**

**We also have a forum for any type of concerns, feature requests, or discussions. Please visit: [Art CRM Forums](https://forums.artcrmcrm.com/)**

# Visit our live [Demo](https://demo.artcrmcrm.com)

It packs in lots of features that will allow your E-Commerce business to scale in no time:

-   Descriptive and Simple Admin Panel.
-   Admin Dashboard.
-   Custom Attributes.
-   Built on Modular Approach.
-   Email parsing via Sendgrid.
-   Check out [these features and more](https://artcrmcrm.com/features/).

**For Developers**:
Take advantage of two of the hottest frameworks used in this project -- Laravel and Vue.js -- both of which have been used in Art CRM.

### Documentation

#### Art Documentation [https://devdocs.artcrmcrm.com](https://devdocs.artcrmcrm.com)

### Requirements

-   **SERVER**: Apache 2 or NGINX.
-   **RAM**: 3 GB or higher.
-   **PHP**: 7.4 or higher.
-   **For MySQL users**: 5.7.23 or higher.
-   **For MariaDB users**: 10.2.7 or Higher.
-   **Node**: 8.11.3 LTS or higher.
-   **Composer**: 1.6.5 or higher.

### Installation and Configuration

##### Execute these commands below, in order

```
composer create-project artcrm/laravel-crm
```

-   Find **.env** file in root directory and change the **APP_URL** param to your **domain**.

-   Also, Configure the **Mail** and **Database** parameters inside **.env** file.

```
php artisan artcrm-crm:install
```

**To execute Art**:

##### On server:

Warning: Before going into production mode we recommend you uninstall developer dependencies.
In order to do that, run the command below:

> composer install --no-dev

```
Open the specified entry point in your hosts file in your browser or make an entry in hosts file if not done.
```

##### On local:

```
php artisan route:clear
php artisan serve
```


**How to log in as admin:**

> _http(s)://example.com/admin/login_

```
email:admin@example.com
password:admin123
```

### License

Art CRM is a truly opensource CRM framework which will always be free under the [MIT License](https://github.com/artcrm/laravel-crm/blob/master/LICENSE).

### Security Vulnerabilities

Please don't disclose security vulnerabilities publicly. If you find any security vulnerability in Art CRM then please email us: mailto:sales@artcrmcrm.com.
