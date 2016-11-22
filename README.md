# PHPChartJS
PHP library for [ChartJS 2.4](http://www.chartjs.org/)

PHPChartJS acts as an interface between the ChartJS library and the server side code. Set up a chart in no time and have every aspect of the graph managable from your PHP code. This interface is set up to provide code completion in every scenario so you never have to guess or lookup what options are available for the chosen chart.

This library is still in active development and aims to implement all options ChartJS has to offer. Check the [Configuration milestone](https://github.com/halfpastfouram/PHPChartJS/milestone/1) to view the progress of implementing all existing options.

## Example use

    <?php
    use Halfpastfour\PHPChartJS\Factory;

    use Halfpastfour\PHPChartJS\Chart\Bar;

    $bar = new Bar();

    // Set labels
    $bar->getLabels()->exchangeArray( [ "M", "T", "W", "T", "F", "S", "S" ] );

    // Add Datasets
    $apples = $bar->createDataSet();
    $apples->setLabel( "apples" )
      ->setBackgroundColor( "rgba( 0, 150, 0, .5 )" )
      ->data()->exchangeArray( [ 12, 19, 3, 17, 28, 24, 7 ] );
    $bar->addDataSet( $apples );

    $oranges = $bar->createDataSet();
    $oranges->setLabel( "oranges" )
      ->setBackgroundColor( "rgba( 255, 153, 0, .5 )" )
      ->data()->exchangeArray( [ 30, 29, 5, 5, 20, 3, 10 ] );
    $bar->addDataSet( $oranges );
    
    // Render the chart
    echo $bar->render();
    
Take a look at the examples in the test folder to explore the different options.

## Installation

### Using composer
    $ composer require halfpastfouram/phpchartjs dev-master

### Development
This project uses composer, which should be installed on your system. Most
Linux systems have composer available in their PHP packages.
Alternatively you can download composer from [getcomposer.org](http://getcomposer.org).

If you use the PhpStorm IDE then you can simply init composer through the IDE. However,
full use requires the commandline. See PhpStorm help, search for composer.

To start development, do `composer install` from the project directory. 

**Remark** Do not use `composer update` unless you changed the dependency requirements in composer.json.
The difference is that `composer install` will use composer.lock read-only, 
while `composer update` will update your composer.lock file regardless of any change.
As the composer.lock file is committed to the repo, other developers might conclude 
dependencies have changed, while they have not.
