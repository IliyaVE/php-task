<?php
$string1 = 'c:\WebServers\home\testsite\www\myfile.txt';
$string2 = '/var/log/myfile2.txt';
$string3 = 'c:\WebServers\home\testsite\www\myfile.7z';
$string4 = 'c:\WebServers\home\testsite\www\myfile';

function infopath($path){
    $path = str_replace("\\" ,"/", $path);
    $pathfile = basename($path);
    return $pathfile;

}
echo infopath($string4);