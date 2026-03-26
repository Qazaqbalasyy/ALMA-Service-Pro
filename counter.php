<?php
// counter.php - Simple file-based visitor counter
$counter_file = 'counter.txt';

// Initialize file if doesn't exist
if (!file_exists($counter_file)) {
    file_put_contents($counter_file, '0');
}

// Function to get and increment count
function get_visitor_count($increment = true)
{
    global $counter_file;
    $count = (int) file_get_contents($counter_file);

    if ($increment) {
        $count++;
        file_put_contents($counter_file, (string) $count);
    }

    return $count;
}
?>