<?php

namespace Golf;

use Course;

class GolfController {
  private Course $course = new Course();

  public function show() {    
    return $this->course;
  }

  public function mark(int $holeNumber, int $score) {
    $this->course($holeNumber, $score);
  }

  public function sum() { 
    return $this->course->sum();
  }

}