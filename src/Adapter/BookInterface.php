<?php
/**
 * Created by: leandro
 * Datetime: 18/08/16 14:57
 */
namespace App\Adapter;

interface BookInterface
{
    public function open();

    public function turnPage();
}