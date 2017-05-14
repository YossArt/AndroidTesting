<?php

$user =  $HTTP_POST_VARS['user'];
$pass =  $HTTP_POST_VARS['pass'];

$con = mysql_connect('localhost' , 'root' , '1234');

$db = mysql_select_db('userDB' ,$con);

$sql = "insert into userinfo(username, password) values('$user','$pass')";

$result = mysql_query($sql , $con);


?>