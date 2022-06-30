<?php
$string1 = 'c:\WebServers\home\testsite\www\my.file..txt';
$string2 = '/var/log/myfile2.txt';
$string3 = 'c:\WebServers\home\testsite\www\myfile.7z';
$string4 = 'c:\WebServers\home\testsite\www\myfile';

function infopath($path){
    $pattern = "/\.[a-zA-Z]+$/ui";
    $path = str_replace("\\" ,"/", $path);
    $pathfile = basename($path);
    $pathfile = preg_replace($pattern," ",$pathfile);
    return $pathfile;
}
echo infopath($string3);