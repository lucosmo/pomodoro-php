<?php
class Work{
  private $start = 0;
  private $length  = 0;

  public function __construct(int $length){
    #$this->start = microtime(true);
    $this->length = $this->minutesToSeconds($length);
  }

  public function countdown(){
    $this->start = microtime(true);
    while($i = microtime(true) < $this->start + $this->length){
      sleep(1);
      echo "work /n";
    }
    $this->beep();
  }

  private function beep(){
    fprintf ( STDOUT, "%s", "\x07" );
  }

  private function minutesToSeconds(int $length){
    return $length*60.0;
  }
}
