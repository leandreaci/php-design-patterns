<?php
/**
 * Created by: leandro
 * Datetime: 18/08/16 15:29
 */

namespace App\TemplateMethodPattern;


abstract class Sub
{

    public function make()
    {
        return $this->layBread()
            ->addLettuce()
            ->addPrimaryToppings()
            ->addSauce();
    }

    protected function layBread()
    {
        var_dump('laying down the bread');
        return $this;
    }

    protected function addLettuce()
    {
        var_dump('add some lettuce');
        return $this;
    }

    protected function addSauce()
    {
        var_dump('add oil and vinegar');
        return $this;
    }

    protected abstract function addPrimaryToppings();
    
}