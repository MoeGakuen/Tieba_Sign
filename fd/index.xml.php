<?php

/*  Hi,
    
    Thanks for downloading net2ftp!
    
    This page generates the XML file that is needed for the OpenLaszlo skin.
  
    Enjoy,
    
    David 
*/

// ------------------------------------------------------------------------
// 1. Define the constants NET2FTP_APPLICATION_ROOTDIR and NET2FTP_APPLICATION_ROOTDIR_URL
// ------------------------------------------------------------------------
define("NET2FTP_APPLICATION_ROOTDIR", dirname(__FILE__));
if     (isset($_SERVER["SCRIPT_NAME"]) == true) { define("NET2FTP_APPLICATION_ROOTDIR_URL", dirname($_SERVER["SCRIPT_NAME"])); }
elseif (isset($_SERVER["PHP_SELF"]) == true)    { define("NET2FTP_APPLICATION_ROOTDIR_URL", dirname($_SERVER["PHP_SELF"])); }

// ------------------------------------------------------------------------
// 2. Include the file /path/to/net2ftp/main.inc.php
// ------------------------------------------------------------------------
require_once("./includes/main.inc.php");

// ------------------------------------------------------------------------
// 3. Execute net2ftp($action). Note that net2ftp("sendHttpHeaders") MUST 
//    be called once before the other net2ftp() calls!
// ------------------------------------------------------------------------
//error_reporting(0); // Set the error reporting to none to avoid XML parsing errors
net2ftp("sendHttpHeaders");
net2ftp("printBody");

// ------------------------------------------------------------------------
// 4. Check the result and print out an error message. This can be done using 
//    a template, or by accessing the $net2ftp_result variable directly.
// ------------------------------------------------------------------------
if ($net2ftp_result["success"] == false) {
	require_once($net2ftp_globals["application_rootdir"] . "/skins/" . $net2ftp_globals["skin"] . "/error.template.php");
}

?>