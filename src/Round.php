<?php

namespace App;

class Round
{
    public $peews;

    public function __construct($peews){
        $this->peews = $peews;
    }

    public function getPeews(){
        return $this->peews;
    }

}