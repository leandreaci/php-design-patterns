<?php
/**
 * Created by: leandro
 * Datetime: 18/08/16 14:59
 */
namespace App;

interface eReaderInterface
{
    public function turnOn();

    public function pressNextButton();
}