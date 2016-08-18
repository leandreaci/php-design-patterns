<?php

namespace App\Strategy;

class LogToWebService implements Logger
{
    public function log($data)
    {
        var_dump('log the data to a Saas site');
    }
}