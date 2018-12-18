<?php
//
// This file is for custom functions that don't fit in somewhere explicitly.
// 
// Mainly I'm looking for SQL injection techniques, and replacing them with
//  a character which will cause the SQL query to fail


function sanitize($string, $spacesAllowed = true, $semiColonAllowed = true) {
    $replaceValue = "Q";

    if (!$semiColonAllowed) {
        $string = str_replace(';', $replaceValue, $string);
    }
    
    if (!$spacesAllowed) {
        $string = str_replace(' ', $replaceValue, $string);
    }
    $string = htmlentities($string, ENT_QUOTES);

    $string = str_replace('%20', $replaceValue, $string);

    return $string;
}
