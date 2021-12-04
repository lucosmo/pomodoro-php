<?php

namespace Pomodoro;

require 'work.php';
require 'relax.php';
require 'progress_b.php';

#var_dump($argv);
$work = null;
$rest = null;
$loops = null;
$current_loop = 0;
$text = null;
define("MAX_LOOP", 50);

if (count($argv)!=4) {
    exit(" missing arguments!\n php pomodoro.php work_time break_time number_repeats\n work_time, break_time - time in minutes\n number_repeats - (int) how many loops will pomodoro do\n               - type 0 for infinite loop");
} else {
    $work = (float)$argv[1];
    $rest = (float)$argv[2];
    $loops = (int)$argv[3] === 0 ? MAX_LOOP : (int)$argv[3];
}


while ($loops > $current_loop) {
    $start = microtime(true);
    $w = new Work($work);
    $text = "work";
    $w->countdown($text);

    $start = microtime(true);
    $b = new Relax($rest);
    $text = "break";
    $b->countdown($text);
    $current_loop++;
    echo "end of loop no {$current_loop}\n";
}
