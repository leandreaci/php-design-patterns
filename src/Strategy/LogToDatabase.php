<?php

namespace App\Strategy;

class LogToDatabase implements Logger
{
    public function log($data)
    {
        var_dump('log the data to a database');
    }
}