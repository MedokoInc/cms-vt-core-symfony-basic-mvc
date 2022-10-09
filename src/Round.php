<?php

namespace App;


class Round
{
    public array $peews;
    public int $id;

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

    public function getWinner(): string{
        $winner = $this->peews[0];
        foreach ($this->peews as $peew) {
            if ($peew->getDistance() > $winner->getDistance()) {
                $winner = $peew;
            } elseif ($peew->getDistance() == $winner->getDistance()) {
                if ($peew->getTime() < $winner->getTime()) {
                    $winner = $peew;
                }
            }
        }
        return $winner->getPlayer();
    }

}