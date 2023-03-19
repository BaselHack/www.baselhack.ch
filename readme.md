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
