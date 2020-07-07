# PHP+Vue URL Shortner

PHP+Vue URL Shortner is a very simple app URL.

## Installation

1\. Clone the repo

2\. Create a database in your MySQL and use the file `database.sql` to create table.

3\. Configure php webserver.

- For **Apache**, edit `.htaccess` file with the following:

    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^(.*)$ index.php?q=$1 [QSA,L]

- For **Nginx**, add the following to your server declaration:

    server {
        location / {
            rewrite ^/(.*)$ /index.php?q=$1;
        }
    }

4\. Edit the `config.php` file.

## Generating short URLs

To generate a short URL, just pass parameter `url` in query along with a `format` query param to your app:

    <YOUR_SERVER_URL>/?url=http://www.google.com&format=text

It will return a shortened URL such as:

    <YOUR_SERVER_URL>/9xq

When a user opens the short URL they will be redirected to the long URL location.

The possible formats are `text`, and `json`.

## Whitelist (Optional)

By default everyone is allowed to enter URL for shortening but you can restrict this behavior by calling the following method:

`$app->allow('192.168.0.10');`

## Requirements

* PHP > 5.1
* PDO extension