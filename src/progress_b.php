<?php
namespace Pomodoro;

/**
 * Class ProgressBar provides progress bar functionality for Pomodoro tool.
 */
class ProgressBar {
  $current = null;
  $total = null;

  function __construct($total, $current=0) {
    $this->total = $total;
    $this->current = $current;
  }

  function display($done) {
    echo round($done/$total*100)."%\r";
  }
}
