<?php
require 'work.php';
require 'relax.php';

var_dump($argv);
$work = null;
$rest = null;
if (count($argv)!=3) {
  echo "missing arguments!\n php pomodoro.php work_time break_time\n work_time, break_time - time in minutes";
}
else {
  $work = (float)$argv[1];
  $rest = (float)$argv[2];
}

$start = microtime(true);
#$work=10;

$w = new Work($work);
$w->countdown();
$start = microtime(true);
$b = new Relax($rest);
$b->countdown();
