<?php

namespace App;

class Peew
{
    public string $player;
    public float $distance;
    public float $time;
    public string $model;
    public string $date;

    public function __construct($player, $distance, $time, $model, $date){
        $this->player = $player;
        $this->distance = $distance;
        $this->time = $time;
        $this->model = $model;
        $this->date = $date;
    }

    public function getDistance(){
        return $this->distance;
    }

    public function getTime(){
        return $this->time;
    }

    public function getSpeed(){
        return $this->distance / $this->time;
    }

    public function getPlayer(){
        return $this->player;
    }

    public function getModel(){
        return $this->model;
    }

    public function getDate(){
        return $this->date;
    }

    public function getMatch(): string
    {
        return $this->player . " " . $this->distance . " " . $this->time . " " . $this->model . " " . $this->date;
    }

    public function getArray(): array
    {
        return array($this->player, $this->distance, $this->time, $this->model, $this->date);
    }

}