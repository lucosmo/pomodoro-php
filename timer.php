<?php
namespace Pomodoro;

/**
 * Class Timer provides basic functionality for Pomodoro tool.
 */

class Timer{

  /**
   * @var float $start Start point for countown process
  */

  private $start = 0;

  /**
   * @var float $length Describes how long does the countdown phase takes
  */

  private $length  = 0;

  public function __construct(float $length){
    $this->length = $this->minutesToSeconds($length);
  }

  public function countdown(string $text){
    $this->start = microtime(true);
    while($i = microtime(true) < $this->start + $this->length){
      sleep(1);
      echo "{$text} \n";
    }
    $this->beep();
    return;
  }

  private function beep(){
    fprintf ( STDOUT, "%s", "\x07" );
    return;
  }

  private function minutesToSeconds(float $length){
    return $length*60.0;
  }
}
