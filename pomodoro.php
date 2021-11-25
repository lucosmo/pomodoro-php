<?php
require 'work.php';
var_dump($argv);
$work = null;
$rest = null;
if (count($argv)!=3) {
  echo "missing arguments!\n php pomodoro.php work_time rest_time\n work_time, rest_time - time in minutes";
}
else {
  $work = (float)$argv[1];
  var_dump($work);
  $rest = (float)$argv[2];
}

$start = microtime(true);
#$work=10;

$w = new Work($work);
$w->countdown();
$start = microtime(true);
#$rest=3;
while($i=microtime(true)<=$start+$rest){
  sleep(1);
  echo "r";
}
fprintf ( STDOUT, "%s", "\x07" );
