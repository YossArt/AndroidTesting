<?php
$user =  $HTTP_POST_VARS['user'];
$pass =  $HTTP_POST_VARS['pass'];

$correct_user="Mohamed";
$correct_pass=12345;

if(!$user || !$pass){
Echo  "�� ��� ������ ���� ��������";
Echo "<a  href='ex-10.php'>  ���� ����� ����� ��������  </a>"; 
Exit;
}

If($user ==$correct_user &&  $pass ==$correct_pass ){
Echo " Welcome  " .$user;
}
Else{
Echo  "���� ��� �� ��� �������� �� ���� ������ ������  ";
Echo "<a  href='ex-10.php'>  ���� ����� ����� ��������  </a>"; 
Exit;
}


?>