<?php

require_once '../vendor/autoload.php';

use Halfpastfour\PHPChartJS\DataSet;
use Halfpastfour\PHPChartJS\Factory;

$factory   = new Factory();
$bubble       = $factory->create( $factory::BUBBLE );

// Set labels
$bubble->getLabels()->exchangeArray( [ "M", "T", "W", "T", "F", "S", "S" ] );

// Add Datasets
$apples = $bubble->createDataSet();
$apples->setLabel( 'My first dataset' )
	->setBackgroundColor( 'rgba( 0, 150, 0, .5 )' )
	->data()->exchangeArray( [
		[ 'x' => rand( 0, 40 ), 'y' => rand( 0, 30 ), 'r' => rand( 0, 50 ) ],
		[ 'x' => rand( 0, 40 ), 'y' => rand( 0, 30 ), 'r' => rand( 0, 50 ) ],
		[ 'x' => rand( 0, 40 ), 'y' => rand( 0, 30 ), 'r' => rand( 0, 50 ) ],
		[ 'x' => rand( 0, 40 ), 'y' => rand( 0, 30 ), 'r' => rand( 0, 50 ) ],
		[ 'x' => rand( 0, 40 ), 'y' => rand( 0, 30 ), 'r' => rand( 0, 50 ) ],
		[ 'x' => rand( 0, 40 ), 'y' => rand( 0, 30 ), 'r' => rand( 0, 50 ) ],
	] );
$bubble->addDataSet( $apples );

$oranges = $bubble->createDataSet();
$oranges->setLabel( 'My second dataset' )
	->setBackgroundColor( 'rgba( 255, 153, 0, .5 )' )
	->data()->exchangeArray( [
		[ 'x' => rand( 0, 40 ), 'y' => rand( 0, 30 ), 'r' => rand( 0, 50 ) ],
		[ 'x' => rand( 0, 40 ), 'y' => rand( 0, 30 ), 'r' => rand( 0, 50 ) ],
		[ 'x' => rand( 0, 40 ), 'y' => rand( 0, 30 ), 'r' => rand( 0, 50 ) ],
		[ 'x' => rand( 0, 40 ), 'y' => rand( 0, 30 ), 'r' => rand( 0, 50 ) ],
		[ 'x' => rand( 0, 40 ), 'y' => rand( 0, 30 ), 'r' => rand( 0, 50 ) ],
		[ 'x' => rand( 0, 40 ), 'y' => rand( 0, 30 ), 'r' => rand( 0, 50 ) ],
	] );
$bubble->addDataSet( $oranges );

?>

<html>
<head>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.bundle.min.js"></script>
</head>
<body>
<?php
	// Render the chart
	echo $bubble->render();
?>
</body>
</html>