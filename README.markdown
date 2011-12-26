CarRental
=========

Installation
------------

Install the vendors:

    php bin/vendors install

Copy `app/config/parameters.yml-dist` to `app/config/parameters.yml` and edit it to match your database credentials.

Create the database schema:

    php app/console doctrine:schema:create

Load the fixtures:

    php app/console doctrine:fixtures:load

Create your admin account:

    php app/console fos:user:create --super-admin kevin kevin@example.com mypassword

License
-------

This bundle is under the AGPL v3 license. See the complete license in the file `LICENSE`