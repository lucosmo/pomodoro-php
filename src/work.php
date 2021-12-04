<?php

namespace Pomodoro;

require_once 'timer.php';
class Work extends Timer
{
    public function countdown($text)
    {
        parent::countdown($text);
    }
}
