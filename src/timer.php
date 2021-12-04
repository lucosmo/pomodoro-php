<?php

namespace Pomodoro;

/**
 * Class Timer provides basic functionality for Pomodoro tool.
 */

class Timer
{
    /**
     * @var float $start Start point for countown process
     */
    private $start = 0;

    /**
     * @var float $length Describes how long does the countdown phase takes
     */
    private $length  = 0;

    /**
     * @param float $length How long is countdown in minutes
     */
    public function __construct(float $length)
    {
        $this->length = $this->minutesToSeconds($length);
    }

    /**
     * Counting from the momemnt of invoking the function set with counstructor amount of time, sending system signal at the end
     *
     * @param string $text Text which will be printed at the end of the countdown
     *
     * @return void
     */
    public function countdown($text)
    {
        $pb = new ProgressBar($this->length);
        $this->start = microtime(true);
        while (($i = microtime(true)) - $this->start < $this->length) {
            sleep(1);
            $pb->display($i-$this->start, $text);
        }
        $this->beep();

        return;
    }

    /**
     * Invoking system signal
     *
     * @return void
     */
    private function beep()
    {
        fprintf(STDOUT, "%s", "\x07");
        return;
    }

    /**
     * Changes minutes (float number) into seconds
     *
     * @param float $length Number of minutes
     *
     * @return float
     */
    private function minutesToSeconds(float $length)
    {
        return $length*60.0;
    }
}
