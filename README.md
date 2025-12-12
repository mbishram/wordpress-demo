# Wordpress Demo

A demo Wordpress using DDEV and Bedrock.

## Requirements

- DDEV >= 1.24.1

## Getting Started

Copy `.env.example` to `.env` and update the following values.
```dotenv
DB_NAME='db'
DB_USER='db'
DB_PASSWORD='db'
DB_HOST='db'
...
WP_ENV='development'
WP_HOME="${DDEV_PRIMARY_URL}"
WP_SITEURL="${WP_HOME}/wp"
...
```
For more details, see [DDEV Environment Variable page](https://roots.io/bedrock/docs/environment-variables/)

After that, you can run the following command to start DDEV server.
```shell
ddev start
```
It should show the URL where the site is served.