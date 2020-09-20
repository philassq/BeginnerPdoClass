<?php 



include "BeginnerCrud.php";



$pdo = new BeginnerCrud();


if (isset($_POST['submit'])) {
	



	$tableName = "news";

	$title = $_POST['username'];
	$description = $_POST['password'];
	$status = "status";


	$rt = $pdo->add($tableName,$title,$description,$status);

	if (isset($rt)) {
		
		header("location:table.php");
	}

}


if (isset($_GET['action'])) {


	$tableName = "news";
	$value = $_GET['id'];

	$rt = $pdo->delete($tableName,$value);

	if (isset($rt)) {
		
		header("location:table.php");
	}

}



if (isset($_POST['editSubmit'])) {


	$tableName = "news";
	$title =  $_POST['username'];
	$description = $_POST['password'];
	$id =  $_POST['id'];
	

	$rt = $pdo->editPost($tableName,$id,$title,$description);

	if (isset($rt)) {
		
		header("location:table.php");
	}
}



?>