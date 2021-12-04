<?php

namespace Pomodoro;

/**
 * Class ProgressBar provides progress bar functionality for Pomodoro tool.
 */
class ProgressBar
{
    private $total;

    public function __construct($total)
    {
        $this->total = $total;
    }

    public function display($done, $text)
    {
        echo "  [".round($done/$this->total*100)."% - $text]\r";
    }

    public function __get($name)
    {
        return $this->name;
    }
}
