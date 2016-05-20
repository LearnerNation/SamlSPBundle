<?php

namespace AerialShip\SamlSPBundle\Event;

use Symfony\Component\EventDispatcher\Event;

class SamlValidationEvent extends Event
{
    protected $responseTo;

    public  function __construct($responseTo){
        $this->responseTo = $responseTo;
    }

}