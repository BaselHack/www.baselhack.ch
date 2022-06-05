
# BaselHack Website

#### Composer Install

To install dependencies use ```composer```. The BaselHack website uses Laravel Nova CMS, which requires a license
key in order to be downloaded by composer. Thus fist authenticate with Nova via composer:

```
    composer config http-basic.nova.laravel.com email licensekey
```

- email: use the BaselHack main email address
- licensekey: use one of the Nova licenses of BaselHack (ask Didi)

Then install the dependencies:

```
    composer install --prefer-dist --optimize-autoloader --no-scripts
```

#### Test Suite

Run with ```php artisan test```.
