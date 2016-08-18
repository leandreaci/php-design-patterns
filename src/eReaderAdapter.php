<?php
/**
 * Created by: leandro
 * Datetime: 18/08/16 15:01
 */

namespace App;


class eReaderAdapter implements BookInterface
{

    private $eReader;

    public function __construct(eReaderInterface $eReader)
    {
        $this->eReader = $eReader;
    }
    
    public function open()
    {
        $this->eReader->turnOn();
    }

    public function turnPage()
    {
        $this->eReader->pressNextButton();
    }
}