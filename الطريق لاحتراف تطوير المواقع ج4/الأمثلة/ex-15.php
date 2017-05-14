<?php
$con = mysql_connect('localhost' , 'root' , '1234');

$db = mysql_select_db('userDB' ,$con);

$sql = "delete from  userinfo where  username = 'ahmed' ";

$result = mysql_query($sql , $con);
?>

