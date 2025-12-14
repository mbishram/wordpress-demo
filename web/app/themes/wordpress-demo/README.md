# Wordpress Demo Theme

A Wordpress theme demo created using [Sage](https://roots.io/sage/).

## Requirements

- DDEV >= 1.24.1

## Getting Started

While on the theme root directory, Install the required dependencies using npm.
```shell
ddev npm install
```

Copy `.env.example` to `.env` and update the following values.
```dotenv
APP_URL="${DDEV_PRIMARY_URL}"
```
This configuration is needed to fix CORS error that happend in development environment. For more details, see [Laravel Vite on CORS section](https://laravel.com/docs/12.x/vite#cors).

On the first run, build the project using the command below.
```shell
ddev npm run build
```

Afterwards, use the command below while developing.
```shell
ddev npm run dev
```
