<?php
//**********- 1 -*************
$x = array("a",1,"g&5");

for($i = 0;$i <count($x);$i++)
{
print $x[$i];
print "  , ";
}
print "<br>";
//**********- 2 -*************
$y[2]=500;
$y[]="abc";
$y[]="z###";

$z = 2;
do
{
echo $y[$z];
print " ,  ";
$z++;
}
while($z <= 4);
?>