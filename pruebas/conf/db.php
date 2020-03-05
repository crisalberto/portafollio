<?php
 class database{
	 public static function connect(){
		 $db = new mysqli('DevM01.DevX.BellioSoft.com','devm1devx01','n59Go-#zQkW','devm1devx01');
		 $db->query("SET NAMES 'utf8'");
		 return $db;
	 }
 }

?>