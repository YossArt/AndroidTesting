<?php
$x = array('a1' => 123 , 'a2' => "abc" , 'a3' => "4%d");

foreach($x as $y => $z){
echo $y ." : ". $z ."<br>";
}

echo "<br>"."<br>";

$a['username'] = "Mohamed";
$a['password'] = 12345;

while($b = each($a)){
echo $b['key']." :  ".$b['value']."<br>";
}


?>
