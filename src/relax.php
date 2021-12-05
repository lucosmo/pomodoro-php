<?php
namespace Pomodoro;
require_once 'timer.php';
/*
 * Class Timer inheriting from Timer, used for break phase of pomodoro
 *
 */
class Relax extends Timer
{
    public function countdown($text)
    {
        parent::countdown($text);
    }
}
