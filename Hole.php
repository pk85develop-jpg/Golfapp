<?php

namespace Golf;

class Hole {
  private int $score;

  public function mark(int $score) {
    if ($score < 0 || ($score > 5) {
	    throw new \Exception("Invalid hit count");
    }

    $this->score = $score;
  }
  
  public function score() {
    return $this->score;
  }
} 