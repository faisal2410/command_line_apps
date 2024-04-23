#!/usr/bin/env php
<?php

// echo $argc;
// echo PHP_EOL;
// var_dump($argv);

$fname=$argv[1]??" UnknownF";
$lname=$argv[2]??" UnknownL";



// echo "Hello {$fname}{$lname}";

$options=[];
foreach($argv as $val){
    if(strpos($val,"--")!==false){
        $parts=explode("=", $val);
        $parts[0]=str_replace("--","",$parts[0]);
        $options[$parts[0]]=$parts[1];

    }
}

if(key_exists("output",$options)){
   $ufname=strtoupper($fname);
   $ulname=strtoupper($lname);
   echo $ufname." ".$ulname."\n";
}

var_dump($options);

