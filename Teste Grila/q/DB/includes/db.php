<?
	@mysql_connect("localhost","root","") or die("1 nu pot incarca");
	@mysql_select_db("shopping") or die("2 nu pot incarca");
	session_start();
?>