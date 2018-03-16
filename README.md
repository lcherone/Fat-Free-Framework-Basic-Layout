# Fat Free Framework - Base

[![StyleCI](https://styleci.io/repos/124741080/shield?branch=master)](https://styleci.io/repos/124741080)

This is a very simple layout for fatfree framework.

## Install

Clone it then run `composer install`, change database connection in `src/config.ini`

Structure:

```
./
|-- src/
|   |-- assets
|   |   |-- css
|   |   |   `-- styles.css
|   |   |-- images
|   |   `-- js
|   |       `-- bulma.js
|   |-- base
|   |   |-- controller.php
|   |   `-- model.php
|   |-- controller
|   |   |-- api
|   |   |   `-- index.php
|   |   |-- error.php
|   |   `-- index.php
|   |-- lib
|   |   |-- csrf.php
|   |   |-- flashbag.php
|   |   |-- helper.php
|   |   |-- jwt.php
|   |   |-- response.php
|   |   |-- session.php
|   |   `-- system.php
|   |-- model
|   |   `-- user.php
|   |-- view
|   |   |-- error
|   |   |   |-- 404.php
|   |   |   `-- 500.php
|   |   |-- index
|   |   |   `-- index.php
|   |   `-- template.php
|   |-- config.ini
|   |-- index.php
|   `-- routes.ini
|-- README.md
`-- composer.json
```

Uses https://dansup.github.io/bulma-templates/templates/blog.html as an example template.
