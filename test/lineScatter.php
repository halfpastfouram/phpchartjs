<?php

require_once '../vendor/autoload.php';

use Halfpastfour\PHPChartJS\DataSet;
use Halfpastfour\PHPChartJS\Factory;

$factory   = new Factory();
/** @var \Halfpastfour\PHPChartJS\Chart\Line $line */
$line       = $factory->create( $factory::LINE );

// Add Datasets
$dataSet = $line->createDataSet();
$dataSet->setLabel( 'Scatter Dataset' )
	->data()->exchangeArray( array(
		array( 'x' => -10, 'y' => 0 ),
		array( 'x' => 0, 'y' => 10 ),
		array( 'x' => 10, 'y' => 5 ),
	) );
$line->addDataSet( $dataSet );

$scales	= $line->options()->scales();
$xAxis	= $scales->createXAxis();
$xAxis->setType( 'linear' )
	->setPosition( 'bottom' );

$scales->xAxes()->append( $xAxis );

?>

<html>
<head>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.bundle.min.js"></script>
</head>
<body>
<?php
// Render the chart
echo $line->render();
?>
</body>
</html>