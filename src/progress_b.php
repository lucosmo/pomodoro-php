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
    /** 
     * Prints out progress bar
     *
     * Counts percent of passed time and presents it in console
 	 *
 	 * @see Function/method/class relied on
     * @link URL
     * 
     * @param float $done Time which passed since beginning ot the phase.
     * @param string $text Text which should be displayed in progress bar.
     * @return nothing NEEDS TO BE CHANGED
    */
    public function display($done, $text)
    {
        echo "  [".round($done/$this->total*100)."% - $text]\r";
    }

    public function __get($name)
    {
        return $this->name;
    }
}
