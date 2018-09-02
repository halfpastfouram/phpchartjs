<?php

require_once '../../vendor/autoload.php';

use Halfpastfour\PHPChartJS\Factory;

$factory = new Factory();
/** @var \Halfpastfour\PHPChartJS\Chart\Line $line */
$line = $factory->create($factory::LINE);

// Add Datasets
$dataSet = $line->createDataSet();
$dataSet->setLabel('Scatter Dataset')
        ->data()->exchangeArray([
        ['x' => -10, 'y' => 0],
        ['x' => 0, 'y' => 10],
        ['x' => 10, 'y' => 5],
    ]);
$line->addDataSet($dataSet);

$scales = $line->options()->getScales();
$xAxis  = $scales->createXAxis();
$xAxis->setType('linear')
      ->setPosition('bottom');

$scales->getXAxes()->append($xAxis);

?>

<html>
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
</head>
<body>
<?php
// Render the chart
echo $line->render();
?>
</body>
</html>