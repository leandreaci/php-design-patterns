<?php
/**
 * Created by: leandro
 * Datetime: 18/08/16 15:29
 */

namespace App\TemplateMethodPattern;

class TurkeySub extends Sub
{

    public function addTurkey()
    {
        var_dump('add some turkey');
        return $this;
    }

    protected function addPrimaryToppings()
    {
        return $this->addTurkey();
    }
}