#!/usr/bin/env php
<?php

$options =[];
foreach($argv as $val){
    if(strpos($val,"--")!==false){
        $parts=explode("=",$val);
        $parts[0]=str_replace("--","",$parts[0]);
        $options[$parts[0]]=@$parts[1];  //--skip=true 

    }
}
if(key_exists("help",$options)){
    echo "This is help text \n";

}
var_dump($options);