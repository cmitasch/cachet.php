<?php

namespace DivineOmega\CachetPHP\Objects;

class Incident
{
    private $cachetInstance = null;
    
    public function __construct($cachetInstance, $row)
    {
        $this->cachetInstance = $cachetInstance;
        
        foreach ($row as $key => $value) {
            $this->$key = $value;
        }
    }
}
