<?php
	if($_GET) {
		$file = file_get_contents("widgets/".$_GET['id'].".txt");

		if (!$data == false){
			$data = array('success'=> true,'val'=>(int)$file);
			echo json_encode($data);
		}
		else{
			$data = array('success'=> false,'val'=>(int)$file);
			echo json_encode($data);
		}
	}
?>