<?php

namespace Halfpastfour\PHPChartJS\Delegate;

use Zend\Json\Expr;

/**
 * Class ArraySerializable
 * @package Halfpastfour\PHPChartJS\Model
 */
trait ArraySerializable
{
<<<<<<< HEAD
    /**
     * Will loop through class properties and try and assign their values to an array of data that will be returned.
     *
     * @return array
     */
    public function getArrayCopy()
    {
        $data            = [];
        $properties      = get_object_vars($this);
        $reflectionClass = new \Zend_Reflection_Class($this);
        foreach ($properties as $property => $value) {
            // Skip property if it is not accessible
            if (! $reflectionClass->hasProperty($property)) {
                continue;
            }

            // Only process properties that aren't null
            if (! is_null($value)) {
                // Gather phpdoc from property
                $phpDoc = $reflectionClass->getProperty($property)->getDocComment();
                $type   = $phpDoc->getTag('var')->getDescription();
                $object = false;

                // Prepend 'get' to the getter method.
                $getter = 'get' . ucfirst($property);
                if (is_object($value) && ! $this->$property instanceof Expr) {
                    $object = true;
                }

                // Determine whether the getter method is equal to the property name or is prepended by 'is' or 'get'
                if (strcmp($type, 'bool') === 0 || strcmp($type, 'boolean') === 0) {
                    // Prepend 'is' to the getter method
                    $getter = 'is' . ucfirst($property);
                } elseif (method_exists($this, $property) && is_object($value)) {
                    // The getter method is equal to the property name and the value is an actual object
                    $getter = $property;
                    $object = true;
                }

                // Abort if the method does not exist
                if (! method_exists($this, $getter)) {
                    continue;
                }

                // Assign the contents of the property to the data array
                $data[ $property ] = $object ? $this->$getter()->getArrayCopy() : $this->$getter();
            }
        }

        return $data;
    }
}
=======
	/**
	 * Will loop through class properties and try and assign their values to an array of data that will be returned.
	 *
	 * @return array
	 */
	public function getArrayCopy()
	{
		$data            = [];
		$properties      = get_object_vars( $this );
		$reflectionClass = new \Zend_Reflection_Class( $this );
		foreach( $properties as $property => $value ) {
			// Skip property if it is not accessible
			if( !$reflectionClass->hasProperty( $property ) ) continue;

			// Only process properties that aren't null
			if( !is_null( $value ) ) {
				$object = ( is_object( $value ) && !$this->$property instanceof Expr );

				// Prepend 'get' to the getter method.
				$getter = 'get' . ucfirst( $property );
				if ( !method_exists($this, $getter) ) {
					// If 'getSomething' doesn't exist, try to use 'isSomething'
					$getter = 'is' . ucfirst( $property );
				}
				// Finally simply use the property
				if( !method_exists($this, $getter) ) {
					$getter = $property;
				}

				// Abort if none of the above methods exit
				if( !method_exists( $this, $getter ) ) continue;

				// Assign the contents of the property to the data array
				$data[ $property ] = $object ? $this->$getter()->getArrayCopy() : $this->$getter();
			}
		}

		return $data;
	}
}
>>>>>>> 6d743af... Simplified getArrayCopy method
