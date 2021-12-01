<?php
namespace Pomodoro;

/**
 * Class ProgressBar provides progress bar functionality for Pomodoro tool.
 */
class ProgressBar {
  private $total;

  function __construct($total) {
    $this->total = $total;
  }

  public function display($done) {

    echo round($done/$this->total*100)."%\r";
  }

  public function getTotal(){
    return $this->total;
  }
}
