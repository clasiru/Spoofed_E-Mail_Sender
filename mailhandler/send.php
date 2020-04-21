<?php

error_reporting(0);

/*
Spoofed E-Mail Sender (SEMS)
Author: Chandika Lasiru
Blog: https://clasiru.blogspot.com

 ███████╗███████╗███╗   ███╗███████╗
 ██╔════╝██╔════╝████╗ ████║██╔════╝
 ███████╗█████╗  ██╔████╔██║███████╗
 ╚════██║██╔══╝  ██║╚██╔╝██║╚════██║
 ███████║███████╗██║ ╚═╝ ██║███████║
 ╚══════╝╚══════╝╚═╝     ╚═╝╚══════╝
          Spoofed/Fake E-Mail Sender
                      by Area Master


 LEGAL NOTICE:
 
 THIS TOOL IS PROVIDED FOR EDUCATIONAL USE ONLY!
 IF YOU ENGAGE IN ANY ILLEGAL ACTIVITY,
 THE AUTHOR DOES NOT TAKE ANY RESPONSIBILITY FOR IT.
 BY USING THIS TOOL YOU AGREE WITH THESE TERMS. 
*/

$to = $_POST['toemail'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$fromemail = $_POST['fromemail'];
$fromname = $_POST['fromname'];
$lt= '<';
$gt= '>';
$sp= ' ';
$from= 'From:';
$headers = $from.$fromname.$sp.$lt.$fromemail.$gt;

$oldphpself = $_SERVER['PHP_SELF'];
$oldremoteaddr = $_SERVER['REMOTE_ADDR'];
$_SERVER['PHP_SELF'] = "/";
$_SERVER['REMOTE_ADDR'] = $_SERVER['SERVER_ADDR'];

mail($to,$subject,$message,$headers);

$_SERVER['PHP_SELF'] = $oldphpself;
$_SERVER['REMOTE_ADDR'] = $oldremoteaddr;
exit();

?>
