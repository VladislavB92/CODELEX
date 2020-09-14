<?php
// Exercise #6
/*Write a console program in a class named AsciiFigure that draws a figure of the following form,
using for loops.
////////////////\\\\\\\\\\\\\\\\ // 32 chars, 5 SIZE
////////////********\\\\\\\\\\\\
////////****************\\\\\\\\
////************************\\\\
********************************

Then, modify your program using an integer class constant so that it can create a similar figure
of any SIZE. For instance, the diagram above has a SIZE of 5. For example, the figure below has a SIZE of 3:

////////\\\\\\\\ // 16 chars, 3 SIZE
////********\\\\
****************

And the figure below has a SIZE of 7:
////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\        // 48 chars, 7 SIZE
////////////////////********\\\\\\\\\\\\\\\\\\\\
////////////////****************\\\\\\\\\\\\\\\\
////////////************************\\\\\\\\\\\\
////////********************************\\\\\\\\
////****************************************\\\\
************************************************

*/

class AsciiFigure
{

    public const SIZE = 0;
    public $asterix_count = 8;
    // The second line of always will be 8 asterixes.

    function renderLines($s)
    {
        $this->SIZE = $s;
        $line_width = $this->asterix_count * ($this->SIZE - 1);
        // The width of all line if proportional to the second line of asterixes (8) times choosen size (line count) - 1;
        // E.g. 8 * (5 - 1) = 32 symbols in one line ($line_width).

        for ($line = 0; $line < $this->SIZE; $line++) {

            $asterix_on_line = $this->asterix_count * $line;
            // There won't be asterixes on the first line.
            // So line 0 will contain 0 asterixes.

            $slashes_on_line = ($line_width - $asterix_on_line) / 2;

            for ($slash = 0; $slash < $slashes_on_line; $slash++) {
                echo "/";
            }
            for ($asterix = 0; $asterix < $asterix_on_line; $asterix++) {
                echo "*";
            }
            for ($bck_slash = 0; $bck_slash < $slashes_on_line; $bck_slash++) {
                echo "\\"; // "\" can't be written.
            }
            echo "\n";
        }
    }
}

$seven_line = new AsciiFigure();

echo "\nTHIS PROGRAM WILL DRAW Ascii FIGURE\n";
$size = readline("\nEnter the size of the figure (in lines): ");
$seven_line->renderLines($size);
