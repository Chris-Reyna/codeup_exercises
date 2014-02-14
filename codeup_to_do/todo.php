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

function file_open($file = TRUE) {
    echo 'which file would you like to open?:';
    $name_file = get_input(TRUE); 

    $filename = $name_file;

    $handle = fopen($filename, "r");

    $content = fread($handle, filesize($filename));

    fclose($handle);
    
    return $content;

    
}

function file_save($array) {
    echo 'PLease enter file you want to create or rewrite:'; 

    $filename = get_input(TRUE);
    $handle = fopen($filename, "w");
        foreach($array as $item) {
            fwrite($handle, PHP_EOL . $item);
        }
    
    fclose($handle);
    
}

do {

    echo list_items($items);

  // Show the menu options
    echo '(N)ew item, (R)emove item, (S)ort items, (F)irst item removal, (L)ast item removal, (O)pen file, (Q)uit : ';

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

    }elseif ($input == 'F') {


        array_shift($items);
    }else if ($input == 'L') {

        array_pop($items);

    }elseif ($input == 'O') {

        echo 'Would you like to (S)ave or (O)pen a file?:';

       $input_open =  get_input(TRUE);

       if ($input_open == 'O') {
            $file = file_open(TRUE);

            echo $file . "\n";
       
       }elseif ($input_open == 'S') {
            echo 'Enter (P)roceed if you are wanting to rewrite an existing file or (N)ot:';
            
            $input_open =  get_input(TRUE);

            if ($input_open == 'P') {

                $file_save = file_save($items);

                 echo 'File saved' . "\n" . 'Success!! Your file was saved' . "\n" ;
            }
       }

    }


// Exit when input is (Q)uit
} while ($input != 'Q');

// Say Goodbye!
echo "Goodbye!\n";

// Exit with 0 errors
exit(0);
