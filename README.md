Checkpoint 4 - M tous Travaux

This desktop application built on web technologies aims to promote M Tous Travaux company's services. It also includes an administration part where the company owner can manage part of the website and his sites.

Main features :

    Displaying the company's services.
    Displaying the company's work.
    Allowing the user to choose which work he wants to discover (filter).
    Securing the access of the administrator.
    Allowing the administrator to create, review, update, delete his work categories.
    Allowing the administrator to create, review, update, delete his work images.
    Allowing the administrator to create, review, update, delete his work sites.
    Allowing the administrator to export a work site into pdf file.

Getting Started
Prerequisites

    Check composer is installed
    Check yarn is installed
    Check Symfony version is 5.* and PHP 7.4
    The Bootstrap version used is 4.5

Install

    Clone this project

    Run composer install

    Run yarn install

    Create .env.local file from the .env file and modify

    - db_user : your username

    - db_password : your password

    in :

    DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/checkpoint4

    Create the database with php bin/console doctrine:database:create

    Execute migrations and create tables with php bin/console doctrine:migrations:migrate

    Load the fixtures with php bin/console doctrine:fixtures:load

    Run yarn encore dev to build assets

Working

    Run symfony server:start to launch your local php web server
