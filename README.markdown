CarRental
=========

CarRental is a web application designed to manage car rental organizations.
This is a gracious realization of [La Coopérative des Tilleuls](http://la-cooperative-des-tilleuls.com/) originally intended for the association [Auto Solidaire](http://www.as-ats.fr/) (Roubaix, France).

This free software is built using [Symfony2](http://symfony.com/) and [the Sonata Project](http://sonata-project.org/).

Features
--------

- Manage rentals
- Manage customers
- Manage vehicle park
- Mange system users

Installation
------------

Copy `app/config/parameters.ini-dist` to `app/config/parameters.ini` and edit it to match your database credentials.

Install the vendors:

    php bin/vendors install --reinstall

Generate bootstrap files:

    php vendor/bundles/Sensio/Bundle/DistributionBundle/Resources/bin/build_bootstrap.php

Create the database schema:

    php app/console doctrine:schema:create

Load the fixtures:

    php app/console doctrine:fixtures:load

Create your admin account:

    php app/console fos:user:create --super-admin kevin kevin@la-cooperative-des-tilleuls.com mypassword

Install assets:

    php app/console assets:install web/

Go to `http://localhost/` and enjoy.

License
-------

This bundle is under the AGPL v3 license. See the complete license in the file `LICENSE`.