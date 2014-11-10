<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
  include 'DaseClient.php';
	 
	$client = new DaseClient('japanese_grammar');
	$client->setReturnFormat('php');
	$res = $client->search('english_title:"work"');

	foreach ($res->items as $item) {
	 	if (isset($item->metadata->english_title)) {
			print $item->metadata->english_title[0];
			echo "<br />";
		}
	 }
?>
</body>
</html>