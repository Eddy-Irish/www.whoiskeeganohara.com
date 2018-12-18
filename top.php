<?php 
require_once('lib/custom-functions.php');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Keegan O'Hara's Website.</title>
		<meta charset="utf-8">
		<meta name="Keegan" content="WebMaster">
    	<meta name="WhoIsKeeganOHHara?" content="Keegan OHara's professional & personal website contents">

    	<meta name="viewport" content="width=device-width, initial-scale=1">

    	<!--<link rel="stylesheet" href="css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="css/base.css" type="text/css" media="screen">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
        <script src="/scripts/jquery.min.js"></script>
        <script src="/bootstrap/js/bootstrap.min.js"></script>
	
        <?php 
        $debug = false;

        $includeDBPath = "../bin/";
        $includeLibPath = "../lib/";


        ////// PATH SETUP \\\\\\\\
        
        $_SERVER = filter_input_array(INPUT_SERVER, FILTER_SANITIZE_STRING);
        foreach ($_SERVER as $key => $value) {
            $_SERVER[$key] = sanitize($value, false, false);
        }
        
        $domain = "//"; // let the server set http or https as needed

        $server = htmlentities($_SERVER['SERVER_NAME'], ENT_QUOTES, "UTF-8");

        $domain .= $server;

        $phpSelf = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8");

        $path_parts = pathinfo($phpSelf);


        if ($debug) {
            print "<p>Domain" . $domain;
            print "<p>php Self" . $phpSelf;
            print "<p>Path Parts<pre>";
            print_r($path_parts);
            print "</pre>";
        }
        
        $yourURL = $domain . $phpSelf;
        ?>

    </head>

    <?php

       print '<body id="' . $path_parts['filename'] . '">';
       
       include "nav.php";
       
       include "headerImageBar.php";
       
       if ($path_parts['filename'] == "index") {
         include "footer.php";
       }
?>