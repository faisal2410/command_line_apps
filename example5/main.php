#!/usr/bin/env php
<?php
$location = @$argv[1];
$simple=@$argv[2];
$extra = $simple == "simple" ? "?format=3" : "";
if("WINNT"==PHP_OS){
    
    passthru("powershell Invoke-RestMethod wttr.in/{$location}{$extra}");

}else{
    $is_curl_installed=shell_exec("which curl");
    if(!empty($is_curl_installed)){
       
        passthru("curl -s wttr.in/{$location}{$extra}");
    }
}
