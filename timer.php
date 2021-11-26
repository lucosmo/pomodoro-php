<?php
class Timer{
  private $start = 0;
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
  }

  private function beep(){
    fprintf ( STDOUT, "%s", "\x07" );
  }

  private function minutesToSeconds(float $length){
    return $length*60.0;
  }
}
