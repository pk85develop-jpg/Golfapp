<?php

namespace Golf;

use Hole;

class ScoreCounter {

  private array $holes = [];

  public function __construct() {
    for(int $i = 0; $i <= 18; $i++)
    {
      $holes[] = new Hole();
    }
  }

  public function mark($score, $hole) {
    $holes[$hole]->mark($score);
  }

  
  public function sum() {
    $sum = 0;

    for(int $i = 0; $i <= 18; $i++)
    {
      $sum += $holes[$i]->score();
    }
      
    return $sum;
  }
}