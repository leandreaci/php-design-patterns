<?php

namespace App\Strategy;


class LogToFile implements Logger
{
    public function log($data)
    {
        var_dump('log the data to a file');
    }
}