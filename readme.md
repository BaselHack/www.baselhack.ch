
# BaselHack Website

#### Composer Install

To install dependencies use ```composer```. The BaselHack website uses Laravel Nova CMS, which requires a license
key in order to be downloaded by composer. Thus fist authenticate with Nova:

- email: use the BaselHack main email address
- licensekey: use one of the Nova licenses of BaselHack (ask Didi)

```
cp auth.json.example auth.json
```

Then install the dependencies:

```
    composer install --prefer-dist --optimize-autoloader --no-scripts
```

#### Test Suite

Run with ```php artisan test```.
