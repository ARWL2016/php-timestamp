<?php
    $timestamp = '';
    $message = '';
    $date = '';
    $maxTimestamp = 2147483648;
    $ts = 0;


    // get input from request 
    $input = isset($_GET['input']) ? trim($_GET['input']) : '';

    // check if it is a number
    $isNum = is_numeric($input);

    if ($isNum) {
        if ($input < $maxTimestamp) {
            $date = date("Y-m-d H:i:s", (int)$input);
            $timestamp = $input;
        } else {
            $message = 'Max timestamp exceeded';
        }
        

    } else {
        // try to convert input to unix timestamp
        $ts = strtotime($input);

        if ($ts) {   
            $timestamp = $ts;
            $date = date("Y-m-d H:i:s", $timestamp);
        } else {
            $message = 'Error. Invalid input.';
        }
    
    }

   

    

 
    

