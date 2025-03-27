<?php

class Game{
  const BR = '<br />';
  var $price;
  var $name;
  var $photo;
  var $dir = 'games/';

  public function print_game(){
    echo $this->name."\n".self::BR;
    echo $this->price."\n".self::BR;
    echo $this->dir.$this->photo."\n".self::BR;

  }

  public function set_game($name, $price, $photo){
    $this-> name = $name;
    $this-> price = $price;
    $this-> photo = $photo;

  }
}

$game = new Game;
$game-> name = "Metal Gear";
$game-> price = 4.99."$";
$game-> photo = 'metal-gear.jpeg';

$game->print_game();

$game->set_game("Crusaders kings 3", 22.99, "ck3");
$game->print_game();
