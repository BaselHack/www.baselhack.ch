
# BaselHack Website

## Update .env 

```
cp .env.example .env

# update the .env file according your local dev environment
```

## Composer Install

To install dependencies use ```composer```. The BaselHack website uses Laravel Nova CMS, which requires a license
key in order to be downloaded by composer. Thus fist authenticate with Nova:

- email: use the BaselHack main email address
- licensekey: use one of the Nova licenses of BaselHack (ask Didi)

```
cp auth.json.example auth.json


# update the credentials within auth.json

{
    "http-basic":
    {
        "nova.laravel.com": {
            "username": "info@baselhack.ch",
            "password": "NOVA_LICENSE_KEY"
        }
    }
}

```

Then install the dependencies:

```
    composer install --prefer-dist --optimize-autoloader --no-scripts
```

#### Test Suite

Run with ```php artisan test```.
