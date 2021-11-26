<?php
require 'work.php';
require 'relax.php';

#var_dump($argv);
$work = null;
$rest = null;
$loops = null;
$current_loop = 0;
if (count($argv)!=4) {
  exit(" missing arguments!\n php pomodoro.php work_time break_time number_repeats\n work_time, break_time - time in minutes\n number_repeats - (int) how many loops will pomodoro do\n");
}
else {
  $work = (float)$argv[1];
  $rest = (float)$argv[2];
  $loops = (int)$argv[3];
}


while($loops > $current_loop) {
  $start = microtime(true);
  $w = new Work($work);
  $w->countdown();

  $start = microtime(true);
  $b = new Relax($rest);
  $b->countdown();
  $current_loop++;
  echo "end of loop no {$current_loop}\n";

}
