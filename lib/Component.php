<?php
/**
 * Author: sunny
 * Date: 2020-02-04
 * Time: 9:35 PM
 */

namespace bread;


abstract class Component
{
    public function __construct(array $properties=[])
    {
        foreach ($properties as $property => $value) {
            if(!property_exists($this, $property))
                throw new \Error('Invalid props to component');
            $this->$property = $value;
        }
    }

    public abstract function render(): string;
}
