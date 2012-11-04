<?php
$wpconfig = realpath("../../../wp-config.php");
if (!file_exists($wpconfig))  {
	
	echo "Could not found wp-config.php. Error in path :\n\n".$wpconfig ;	
	die;	
}

require_once($wpconfig);
require_once(ABSPATH.'/wp-admin/admin.php');
global $wpdb;

$highlighter = get_option("acb_highlighter");
$supported = get_support_hightligher();

foreach(get_support_hightligher() as $id => $name) {
	if ($id == $highlighter) {
		include 'highlighter/' . $highlighter . ".php";
		exit;
	}
}
include 'highlighter/none.php';
exit;
?>