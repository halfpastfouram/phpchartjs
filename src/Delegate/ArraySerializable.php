<?php

namespace Halfpastfour\PHPChartJS\Delegate;

/**
 * Class ArraySerializable
 * @package Halfpastfour\PHPChartJS\Model
 */
trait ArraySerializable
{
	/**
	 * Will loop through class properties and try and assign their values to an array of data that will be returned.
	 *
	 * @return array
	 */
	public function getArrayCopy()
	{
		$data = [];

		// We want the classes from top to bottom
		// So that subclass attributes will overwrite superclass attributes
		// with the same name
		$hierarchy = [];
		$reflectionClass = new \ReflectionClass( $this );
		while ($reflectionClass) {
			array_push($hierarchy, $reflectionClass);
			$reflectionClass = $reflectionClass->getParentClass();
		}

		/**
		 * Fill the array with attributes and values, for each level in the hierarchy
		 * dropping to the most specialized subclass.
		 */
		foreach($hierarchy as $reflectionClass) {
			$reflectionProperties = $reflectionClass->getProperties();
			/** @var \Zend_Reflection_Property $reflectionProperty */
			foreach($reflectionProperties as $reflectionProperty) {
				$property = $reflectionProperty->getName();
				$phpDoc = $reflectionProperty->getDocComment();
				$phpDocClass = new \Zend_Reflection_Docblock($phpDoc);
				$tag = $phpDocClass->getTag('var');
				$type = $tag->getDescription();
				$getter = strcmp($type, 'bool') === 0 || strcmp($type, 'boolean') === 0 ?
					'is' . ucfirst($property) : 'get' . ucfirst($property);
				// Only if the method exists
				if (method_exists( $this, $getter )) {
					// Assign the contents of the property to the data array
					$obj = $this->$getter();
					$getArrayCopyFound = false;
					if (is_object($obj)) {
						$reflectionClass = new \ReflectionClass($obj);
						$methods = $reflectionClass->getMethods();
						$className = (new \ReflectionClass($this))->getName();
						/** @var \ReflectionMethod $method */
						foreach($methods as $method) {
							if ($method->getName() == "getArrayCopy") {
								$getArrayCopyFound = true;
								break;
							}
						}
					}
					$data[ $property ]	=
						$getArrayCopyFound ? $this->$getter()->getArrayCopy() : $this->$getter();
				}
			}
		}

		return $data;
	}
}