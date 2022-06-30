<?php
$string = 'c:\WebServers\home\testsite\www\myfile.txt';

$regexp = "/[a-zA-Z0-9]+.txt$/ui";

preg_match($regexp, $string, $match);

echo($match[0]);