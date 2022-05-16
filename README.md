# pomodoro-php

### Description
<a href="https://en.m.wikipedia.org/wiki/Pomodoro_Technique">Pomodoro technique</a> implemented using <a href="https://www.php.net/">PHP</a> as command line application.

### Features
- Customised times for work/break
- Progress bar for work/break phase
- System sound notification after end of each phase

### Usage
Launch pomodoro:
```
php pomodoro.php work_time break_time number_loops
```
Where
```
work_time   -  time of work in minutes
break_time   - time of break in minutes
number_loops - 0 for the max number of loops (50) or any other integer
```
