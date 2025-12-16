# Wordpress Demo

A Wordpress demo created using [DDEV](https://ddev.com/), [Bedrock](https://roots.io/bedrock/), and [Sage](https://roots.io/sage/).

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

## Code Formatter

This project uses [Prettier](https://prettier.io/) as a code formatter. To use them, run the following command in the project root to install their dependencies. Remember to start DDEV server before running the command.

```shell
ddev npm install
```

After that, you can use your favorite code editor or CLI to format the code.

## Demo Theme

The demo theme created by Sage are located at `web/app/themes/wordpress-demo`.

For more details on how to run it, see `README.md` file in the same directory.
