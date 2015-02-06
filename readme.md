##Pittsburgh Police Blotter

This is a bare-bones implementation of a RESTful API for viewing the police blotter incidents recorded by the Pittsburgh Police Department.

##Installation

Run `git clone https://github.com/carterfort/pgh-blotter.git` to pull this repo down, then run `composer install` to fetch the rest of the Laravel framework.

You can learn more about [Composer here](http://getcomposer.org).

Laravel requires PHP, Mcrypt and a database. It's pre-configured to use MySQL, but you can learn more about switching it [here](http://laravel.com).

After you've set up your DB, set the variables in the .env file located in the root directory.

##Usage

The app uses Laravel's Artisan Command Line Interface to pull in the available data for the week. The command is `fetch:week`.

A cron tab could be set up to automatically run this command every Monday morning, if that's your speed.

###API

The API hasn't really been built out much. At the moment, it only has the index of all incidents, available at `/incidents`. More API routes will be added as they are deemed useful.

##Caveats

There is no validation or prevention of duplicate data. The structure of this code is also a procedural mess. This was written in about 45 minutes during a [Code & Supply](http://codeandsupply.co) Build Night.

Please adjust your expectations accordingly.

