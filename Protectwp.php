<?php
/*
Plugin Name: Protect Wordpress form Hacker
Plugin URI: http://bdweblab.com
Description: Protect Your WordPress Site From Hacker.</br>Hey this is very cool plugin for anyone to protect self hosted WordPress site.(thanks to Starr for first version)
Author URI: http://bdweblab.com/
Author: Cx Rana
Version: 2.0
*/
global $user_ID; if($user_ID) {
if(!current_user_can('level_10')) {
if (strlen($_SERVER['REQUEST_URI']) > 255 ||
strpos($_SERVER['REQUEST_URI'], "CONCAT") ||
strpos($_SERVER['REQUEST_URI'], "base64")) {
@header("HTTP/1.1 414 Request-URI Too Long");
@header("Status: 414 Request-URI Too Long");
@exit;
}
}
} ?>