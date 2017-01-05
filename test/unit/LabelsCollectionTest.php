<?php
/**
 * Created by PhpStorm.
 * User: gbonnema
 * Date: 5-1-2017
 * Time: 13:54
 */

namespace Halfpastfour\PHPChartJS;

/**
 * Class LabelsCollectionTest
 * @package Halfpastfour\PHPChartJS
 */
class LabelsCollectionTest extends \PHPUnit_Framework_TestCase
{
	/** @var  LabelsCollection */
	private $labelsCollectionEmpty;

	/** @var  LabelsCollection */
	private $labelsCollection;

	/**
	 * @var array
	 */
	private $labelsArray =
		[ "startingLabel", "label1", "label2", "endLabel" ];

	/**
	 *
	 */
	public function setUp()
	{
		$this->labelsCollectionEmpty = new LabelsCollection();
		$this->labelsCollection      = new LabelsCollection( $this->labelsArray );
	}

	/**
	 *
	 */
	public function testJsonSerializeEmpty()
	{
		$expected = '[]';
		$result   = $this->labelsCollectionEmpty->jsonSerialize();
		self::assertSame( $expected, $result );
	}

	/**
	 *
	 */
	public function testJsonSerialize()
	{
		$expected = "[\"" . implode( "\",\"", $this->labelsArray ) . "\"]";
		$result   = $this->labelsCollection->jsonSerialize();
		self::assertSame( $expected, $result );
	}
}
