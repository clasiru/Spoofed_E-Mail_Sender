#!/usr/bin/env python

#Spoofed E-Mail Sender (SEMS)
#Author: Chandika Lasiru
#Blog: https://clasiru.blogspot.com

import argparse
import sys
from urllib.request import urlopen
from urllib.parse import urlencode

banner = """
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
"""

print (banner, "\n");

#Replace the following line with your hosted mail handler.
mailhandler = "https://www.yourwebsite.com/send.php"

def google_ok():
    try:
        urlopen('https://www.google.com', timeout=10);
        return True
    except: 
        return False
    return True

def yahoo_ok():
    try:
        urlopen('https://www.yahoo.com', timeout=10);
        return True
    except: 
        return False
    return True

def mailhandler_ok():
    try:
        urllib.request.urlopen('http://'+mailhandler, timeout=10);
        return True
    except: 
        return False
    return True

parser = argparse.ArgumentParser('python3 sems.py', description='Simple Port Scanner for scanning TCP ports in target hosts')

parser.add_argument('--sN', default='E-Mail Sender',  help='Sender Name (Eg: "John Cena")')
parser.add_argument('--sE', default='sender@example.com', help='Sender E-Mail Address (Eg: johncena@wwe.com)', type=str)
parser.add_argument('--rE', default='recipient@example.com', help='Recipient  E-Mail Address (Eg: chan.96@gmail.com)', type=str)
parser.add_argument('--sub', default='Spoofed E-Mail',  help='Type Subject (Eg: "See Me Chan")')
parser.add_argument('--msg', default='This email was sent by Spoofed E-Mail Sender (SEMS)',  help='Type Message (Eg: "You can see  me brother. I know that.")')

args = parser.parse_args()

fromname = args.sN
fromemail = args.sE
toemail = args.rE
subject = args.sub
message = args.msg

if len(sys.argv)==1:
    parser.print_help();
    sys.exit(0);

data = {
        "fromname" : fromname,
        "fromemail" : fromemail,
        "toemail" : toemail,
        "subject" : subject,
        "message" : message,
       }

if google_ok() or yahoo_ok():
    print ('[*] Internet Status: Online')
    encoded_data = urlencode(data).encode("utf-8");
    urlopen(mailhandler, encoded_data);
    #print (content.readlines());
    print ('[*] E-Mail sent !');
    print ('[*] Some E-Mails will be blocked by E-Mail servers.');
    print ('[*] It depends on Sender E-Mail Address.');
    sys.exit(0);
else:
    print ('[*] Internet: Offline');
    print ('[*] You need an Internet connection to send E-Mail.');

sys.exit(0);
 
