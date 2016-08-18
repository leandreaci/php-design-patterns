<?php
/**
 * Created by: leandro
 * Datetime: 18/08/16 14:58
 */

namespace App;

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