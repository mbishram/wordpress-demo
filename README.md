# Wordpress Demo

A Wordpress demo created using [DDEV](https://ddev.com/) and [Bedrock](https://roots.io/bedrock/).

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

## Demo Theme

There are two types of themes in this project, hybrid theme and block theme.

Hybrid themes are located at `/web/app/themes/hybrid-demo`. They are created using [Sage](https://roots.io/sage/).

For block themes, they are located at `/web/app/themes/block-demo` and are created using [Create Block Theme](https://wordpress.org/plugins/create-block-theme/) plugin's blank theme template.

For more details on how to run them, see `README.md` file on each of the theme's root directory.

## Sample Data

Sample data used for testing purposes are located at `/data` which you can use with [Wordpress' import tool](https://wordpress.com/support/import/import-a-sites-content/) to import them.
