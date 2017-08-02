<?php  
	$filepath = realpath(dirname(__FILE__)); 
	require_once ($filepath.'/lib/streams.php');
	require_once ($filepath.'/lib/gettext.php');
	?>
<?php
	$locle_lang = $_GET['lang'];
	$locale_file = new FileReader("locale/$locle_lang/LC_MESSAGES/messages.mo");
	$localefetch = new gettext_reader($locale_file);

	function _x($text){
		global $localefetch;
		return $localefetch->translate($text); 
	}
 ?>