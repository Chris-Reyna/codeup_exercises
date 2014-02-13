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

// function place_item($array, $value) {

//     $input = get_input(TRUE);

//     if ($input) {


//     }


// }
// The loop!
do {

    echo list_items($items);

  // Show the menu options
    echo '(N)ew item, (R)emove item, (S)ort items, (Q)uit : ';

    // Get the input from user
    $input = get_input(TRUE);

  // Check for actionable input
    if ($input == 'N') {
        
        echo 'Enter item: ';
        // Add entry to list array
        $new_item = get_input(FALSE);

        echo '(B)eginning or (E)nd of list: ';
        $new_item2 = get_input(TRUE);

        if ($new_item2 == 'B') {

            array_unshift($items, $new_item );
        }elseif ($new_item2 == 'E') {
            array_push($items, $new_item);
        }
        // Ask for entry
        //ask the user if they want to add it to the beginning or end of the list
       

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
} while ($input != 'Q');

// Say Goodbye!
echo "Goodbye!\n";

// Exit with 0 errors
exit(0);
