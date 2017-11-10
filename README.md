# Helena Meets Laravel

## Description
My first Laravel app! The basic idea here is that there's a log-in page, a home page, and form where you can take a survey about how well you slept. After you submit the form, your answers will be displayed.

There are a couple of extremely basic tests to go along with this.

You can see this running [here](http://helena-meets-laravel.herokuapp.com/).

## Set up
Do you want to meet Laravel and deploy it to Heroku too? Welcome aboard!

You'll need to make sure you have a few things on your own before cloning this repo:
1. Laravel (which requires Composer and maybe some other stuff) -- [installation guide](https://laravel.com/docs/5.5/installation)
2. PHP 7.1 -- [installation blog post](https://www.colinodell.com/blog/2016-12/installing-php-7-1)
3. MySQL -- `brew install mysql`
4. I used Laravel Valet for local testing -- [installation guide](https://laravel.com/docs/5.5/valet#installation)
3. If you want to deploy to Heroku, you'll need an account and their command line tools -- `brew install heroku` or [installation guide](https://devcenter.heroku.com/articles/heroku-cli#download-and-install)

At this point, you can clone the repo.

### Setting up your local DB
Make a copy of the `.env.example` file, and name it `.env`. We'll need to replace the DB section:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```

Create a new database in mysql:
```
mysql -u{user} -p{password} # Replace {user} and {password}, password can be empty
create database {name};
use {name};
```

Now use the `{user}`, `{password}`, and database `{name}` that you just set to fill out your `.env` file.
```
DB_DATABASE={name}
DB_USERNAME={user}
DB_PASSWORD={password}
```

Now run `php artisan migrate:fresh`. If you've set up Laravel Valet properly, you should now be able to visit `helenameetslaravel.dev`. 🎉

### Deploying to Heroku
I followed this [tutorial](https://devcenter.heroku.com/articles/getting-started-with-laravel). You can skip creating a Procfile, as I've included that in this repo. I also skipped the "Trusting the Load Balancer" step, and everything seems to be working just fine.

By default, your Heroku app will be set up to deploy when you do `git push heroku master`.

Once you have your app on Heroku, you'll need to set up the database. I followed this [guide](http://selimsalihovic.github.io/2016-02-07-using-mysql-on-heroku/).

## Thoughts on Laravel
Laravel provides a lot of nice things out of the box (login, a nice testing framework, etc). I'm still a little confused about where helpers and business logic should go (how would I organize this if it did anything remotely useful?), and I'm not sure if it's breaking PHPStorm's static analysis, or if I'm just doing something wrong. Either way, I got the impression that Laravel was designed by someone that doesn't already benefit from IDE code generation.

