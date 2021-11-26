<?php
require 'work.php';
require 'relax.php';

#var_dump($argv);
$work = null;
$rest = null;
$loops = null;
if (count($argv)!=3) {
  exit(" missing arguments!\n php pomodoro.php work_time break_time number_repeats\n work_time, break_time - time in minutes\n number_repeats - (int) how many loops will pomodoro do\n");
}
else {
  $work = (float)$argv[1];
  $rest = (float)$argv[2];
  $loops = (int)$argv[3];
}

$start = microtime(true);
$w = new Work($work);
$w->countdown();

$start = microtime(true);
$b = new Relax($rest);
$b->countdown();
