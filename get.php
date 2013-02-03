<?php
	if($_GET) {
		$file = file_get_contents($_GET['id'].".txt");
		if(!$file==False)
			echo json_encode($file);
	}
?>