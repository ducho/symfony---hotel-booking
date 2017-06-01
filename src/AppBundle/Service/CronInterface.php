<?php

namespace AppBundle\Service;


interface CronInterface
{
    /** @return string */
    public function spec();
    
    public function run();
}