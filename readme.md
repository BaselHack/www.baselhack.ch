# BaselHack Website

# Setup

## Preparation

```
cp .env.example .env

# update the .env file according your local dev environment

cp .vite.config.js.example vite.config.js

# update the vite.config.js file according your local dev environment

cp auth.json.example auth.json 

# update the auth.json file according to your license keys
```

## Installation

```
# Install backend dependencies
composer install

# Install frontend dependencies & generate assets
npm install && vite build

# Databse migrations & local data
php artisan migrate:fresh --seed
```

# Use / Start Dev Server

note: a regular start with "ddev npm run dev" is not possible, because the vite dev server is not accessible from the outside, it will assume:

```Network: use --host to expose````

use:

```- ddev exec npm run dev -- --host```

The output should indicate that your vite dev server now listens on other interfaces than only localhost.
[Medium Link](https://medium.com/@mtillmann_68557/using-laravel-9-breeze-with-ddev-and-vite-3e40abd2954a)

the start of the ddev container will automatically start the command (see .ddev/config.yaml -> hooks -> post-start)

! Don't forget to add DDEV_HOSTNAME to your .env file.

# Services

## Github

- Code Versioning

## Laravel Forge & Laravel Envoyer

- Server Deployment
- Zero Downtime PHP Deployment

## Laravel Nova

- Administration Panel

## Postmark

Transaction E-Mails.
https://postmarkapp.com

```
MAIL_MAILER=postmark
POSTMARK_TOKEN=**<TOKEN>**
```

#### Tests

Run with ```php artisan test```.
