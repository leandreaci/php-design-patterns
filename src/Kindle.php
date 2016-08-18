<?php
/**
 * Created by: leandro
 * Datetime: 18/08/16 14:58
 */

namespace App;


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