<?php

// Create array to hold list of todo items
$items = array();

// List array items formatted for CLI
function list_items($array) {

    $string = '';

    foreach ($array as $key => $value) {

        $string .= ++$key . $value . PHP_EOL;
    }

    return $string;
}

echo list_items($items);

// Get STDIN, strip whitespace and newlines, 
// and convert to uppercase if $upper is true
function get_input($upper = FALSE) {

    $u_case = trim(fgets(STDIN));
     return ($upper) ? strtoupper($u_case) : $u_case;
    
}

// The loop!
do {

    echo list_items($items);

  // Show the menu options
    echo '(N)ew item, (R)emove item, (S)ort items, (Q)uit : ';

    // Get the input from user
    $input = get_input(TRUE);

  // Check for actionable input
    if ($input == 'N') {
        // Ask for entry
        echo 'Enter item: ';
        // Add entry to list array
        $items[] = get_input(FALSE);

    } elseif ($input == 'R') {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key
        $key = get_input(FALSE);
        // Remove from array
        $key--; 
        unset($items[$key]);
   
    } elseif ($input == 'S') {
        

        echo '(A)-Z or (Z)-A:';

        $sort_input = get_input(TRUE);

    

        //get input 
        if ($sort_input == 'Z') {

             rsort($items);
        }elseif ($sort_input =='A') {
            sort($items);
        }

    }


// Exit when input is (Q)uit
} while ($input != 'Q' && $input != 'q');

// Say Goodbye!
echo "Goodbye!\n";

// Exit with 0 errors
exit(0);
