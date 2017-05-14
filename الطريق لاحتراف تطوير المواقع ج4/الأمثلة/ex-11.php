<?php
$user =  $HTTP_POST_VARS['user'];
$pass =  $HTTP_POST_VARS['pass'];

$correct_user="Mohamed";
$correct_pass=12345;

if(!$user || !$pass){
Echo  "áã ÊŞã ÈÅÏÎÇá ßÇãá ÇáÈíÇäÇÊ";
Echo "<a  href='ex-10.php'>  ÑÌæÚ áÕİÍÉ ÇÏÎÇá ÇáÈíÇäÇÊ  </a>"; 
Exit;
}

If($user ==$correct_user &&  $pass ==$correct_pass ){
Echo " Welcome  " .$user;
}
Else{
Echo  "íæÌÏ ÎØÃ İí ÇÓã ÇáãÓÊÎÏã Çæ ßáãÉ ÇáßáãÉ ÇáãÑæÑ  ";
Echo "<a  href='ex-10.php'>  ÑÌæÚ áÕİÍÉ ÇÏÎÇá ÇáÈíÇäÇÊ  </a>"; 
Exit;
}


?>