# Spoofed E-Mail Sender (SEMS)
## This tool is a Spoofed/Fake E-Mail Sending tool for educational use

This tool is a straightforward program created by using Python version Three and PHP. You can send Spoofed/Fake E-Mails by using this tool. Not like other tools, this tool is using a PHP mail() function to handling E-Mails, so this tool required PHP mail() function enabled hosting service for hosting mail handler.

### LEGAL NOTICE:
This tool is provided for educational use only. If you engage in any illegal activity, the author does not take any responsibility for it. By using this tool, you agree with these terms.

## How to use this tool

Before using this tool, you must host the two files ([index.php](../master/mailhandler/index.php) and [send.php](../master/mailhandler/send.php)) in the [mailhandler](../master/mailhandler/) folder. This hosting service must have PHP mail() function enabled. Otherwise, this tool won't work.

After that, find the line number 34 and replace https://www.yourwebsite.com/send.php with your hosted send.php location. Now your tool is ready to use. Follow the usage instructions below.

### Usage:
```
usage: python3 sems.py [-h] [--sN SN] [--sE SE] [--rE RE] [--sub SUB] [--msg MSG]

Simple Port Scanner for scanning TCP ports in target hosts

optional arguments:
  -h, --help  show this help message and exit
  --sN SN     Sender Name (Eg: "John Cena")
  --sE SE     Sender E-Mail Address (Eg: johncena@wwe.com)
  --rE RE     Recipient E-Mail Address (Eg: chan.96@gmail.com)
  --sub SUB   Type Subject (Eg: "See Me Chan")
  --msg MSG   Type Message (Eg: "You can see me brother. I know that.")
```

