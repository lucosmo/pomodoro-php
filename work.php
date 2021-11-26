<?php
require_once 'timer.php';
class Work extends Timer{

  public function countdown(string $text){
    parent::countdown($text);
  }

}
/*
class Work{
  private $start = 0;
  private $length  = 0;

  public function __construct(float $length){
    #$this->start = microtime(true);
    $this->length = $this->minutesToSeconds($length);
  }

  public function countdown(){
    $this->start = microtime(true);
    while($i = microtime(true) < $this->start + $this->length){
      sleep(1);
      echo "work \n";
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
*/
