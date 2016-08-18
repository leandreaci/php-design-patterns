<?php
/**
 * Created by: leandro
 * Datetime: 18/08/16 15:29
 */

namespace App\TemplateMethodPattern;


class VeggieSub extends Sub
{

    public function addVeggies()
    {
        var_dump('add some veggies');
        return $this;
    }

    protected function addPrimaryToppings()
    {
        return $this->addVeggies();
    }
}