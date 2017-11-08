# pokerCharts
a place to organize your scores on poker


### Installation ###

* type `git clone git@github.com:mthdht/pokerCharts.git` to clone the repository 
* type `cd pokerCharts`
* type `composer install`
* type `composer update`
* copy *.env.example* to *.env*
* type `php artisan key:generate`to generate secure key in *.env* file
* if you use MySQL in *.env* file :
   * set DB_CONNECTION
   * set DB_DATABASE
   * set DB_USERNAME
   * set DB_PASSWORD
* if you use sqlite :
   * type `touch database/database.sqlite` to create the file
* type `php artisan migrate --seed` to create and populate tables
* edit *.env* for emails configuration

### Include ###


* [Laravel debugbar](https://github.com/barryvdh/laravel-debugbar)

### Features ###

* Home Front
* Auth

### Tricks ###



### Tests ###



### License ###

