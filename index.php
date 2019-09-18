<?php 
header("Content-Type: text/html; charset=utf-8");

require_once("models/index.php");

if(isset($_POST['enter']) and (isset($_POST['name']) && isset($_POST['comment']))) {
	$name = $_POST['name'];
 	$comment = $_POST['comment'];
 	new_comment($link, $name, $comment);
 	header("Location:index.php");
 }else
$all_comment = all_comment($link);
include("file.php");
 ?>


