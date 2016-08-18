<?php

namespace App\Adapter;


class Kindle implements eReaderInterface
{

    public function turnOn()
    {
        var_dump('Turn the kindle on');
    }

    public function pressNextButton()
    {
        var_dump('press the next button in de kindle');
    }

}