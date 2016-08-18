<?php

namespace App\Strategy;


class App
{
    public function log($data,Logger $logger)
    {
        $logger->log($data);
    }
}