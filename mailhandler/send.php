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

	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= "From:" . $fromname . " <" . $fromemail . ">" . "\r\n";
	$headers .= "X-Priority: 3 (Normal)" . "\r\n";
	$headers .= "Errors-To:" . $fromemail . "\r\n";
	$headers .= "Reply-To:" . $fromemail . "\r\n";
	$headers .= "Return-Path:" . $fromemail . "\r\n";
			
	mail($to,$subject,$message,$headers,'-f' . $fromemail);

exit();

?>
