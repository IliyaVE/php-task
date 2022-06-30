<?php
$string1 = 'c:\WebServers\home\testsite\www\myfile.txt';
$string2 = '/var/log/myfile.txt';
$string3 = 'c:\WebServers\home\testsite\www\myfile.7z';
$string4 = 'c:\WebServers\home\testsite\www\myfile';

$regexp = "/[a-zA-Z0-9]+.[a-zA-Z]$/ui";

preg_match($regexp, $string, $match);

echo($match[0]);