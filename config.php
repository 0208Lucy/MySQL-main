<?php
	try {
		$pdo = new PDO('mysql:host=localhost;dbname=demo;charset=utf8','root', '');
	} catch(PDOException $e) {
		print "資料庫連結失敗";
		die();
	}
?>