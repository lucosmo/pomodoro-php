<?php
var_dump($argv);
$start = microtime(true);
$work=10;

while($i=microtime(true)<=$start+$work){
  sleep(1);
  #if(abs(microtime(true)-$i)<1.0)
    echo "w";
}
fprintf ( STDOUT, "%s", "\x07" );
$start = microtime(true);
$rest=3;
while($i=microtime(true)<=$start+$rest){
  sleep(1);
  echo "r";
}
fprintf ( STDOUT, "%s", "\x07" );
