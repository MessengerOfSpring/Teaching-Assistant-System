<?php
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	$servername = "120.77.34.254";
	$username = "zjuseG04";
	$password = "exciting";
	$dbname='teaching_db';
		 
	// 创建连接
	$conn = new mysqli($servername, $username, $password,$dbname);
	$conn->query("set names utf8;");
?>