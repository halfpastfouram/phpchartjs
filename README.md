# PHPChartJS
PHP library for [ChartJS 2.0](http://www.chartjs.org/)

## Requirements

This project uses composer, which should be installed on your system. Most
Linux systems have composer available in their PHP packages.
Alternatively you can download composer from [getcomposer.org](http://getcomposer.org).

If you use the PhpStorm IDE then you can simply init composer through the IDE. However,
full use requires the commandline. See PhpStorm help, search for composer.

## Install and use
To start development, do `composer install` from the project directory. 

**Remark** Do not use `composer update` unless you changed the dependency requirements in composer.json.
The difference is that `composer install` will use composer.lock read-only, 
while `composer update` will update your composer.lock file regardless of any change.
As the composer.lock file is committed to the repo, other developers might conclude 
dependencies have changed, while they have not.
