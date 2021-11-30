<?php
namespace Pomodoro;

require_once 'timer.php';
class Relax extends Timer{

  public function countdown(string $text){
    parent::countdown($text);
  }
}
