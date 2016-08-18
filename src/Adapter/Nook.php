<?php

namespace App\Adapter;

class Nook implements eReaderInterface
{

    public function turnOn()
    {
        var_dump('Turn the nook on');
    }

    public function pressNextButton()
    {
        var_dump('press the next button in the nook');
    }

}