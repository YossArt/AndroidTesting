<?php
$con = mysql_connect('localhost' , 'root' , '1234');

$db = mysql_select_db('userDB' ,$con);

$sql = "select * from userinfo";

$result = mysql_query($sql , $con);

While($row = mysql_fetch_array($result))
{
Echo  $row['username']."-".$row['password']."<br>";
}

?>