<?php 
	$file_to_delete = $_GET['filename'];
	if(is_file('files/'.$file_to_delete)){
		unlink('files/'.$file_to_delete);
		header('location: index.php');
	}
?>