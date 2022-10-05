<?php

namespace App;

class Round
{
    public $peews;
    public $id;

   public function __construct($peews, $id){
       $this->peews = $peews;
       $this->id = $id;
   }

    public function getPeews(){
         return $this->peews;
    }

    public function getId(){
        return $this->id;
    }

}