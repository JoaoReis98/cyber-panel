<?php defined("NET2FTP") or die("Direct access to this location is not allowed."); ?>
<!-- Template /skins/shinra/browse_main.template.php begin -->
<?php 
if ($net2ftp_globals["viewmode"] != "icons") {
	require_once($net2ftp_globals["application_skinsdir"] . "/shinra/browse_main_details.template.php"); 
}
else {
	require_once($net2ftp_globals["application_skinsdir"] . "/shinra/browse_main_icons.template.php"); 
}
?>
<!-- Template /skins/shinra/browse_main.template.php end -->
