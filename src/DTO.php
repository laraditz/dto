<?php

namespace Laraditz\DTO;

class DTO
{
    protected $attributes;

    public function __construct($args)
    {
        $reflection = new \ReflectionClass(get_class($this));

        if ($reflection->getProperties()) {
            foreach ($reflection->getProperties() as $property) {
                $prop_name = $property->getName();

                if (isset($args[$prop_name])) {
                    $this->attributes[$prop_name] = $args[$prop_name];
                    $this->$prop_name = $args[$prop_name];
                }
            }
        }
    }

    public function all()
    {
        return $this->attributes;
    }
}
