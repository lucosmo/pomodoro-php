<?php
namespace Pomodoro;
require_once 'timer.php';
/*
 * Class Work inheriting from Timer, used for work phase of pomodoro
 *
 */
class Work extends Timer
{
    public function countdown($text)
    {
        parent::countdown($text);
    }
}
