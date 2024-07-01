<?php

session_start();

$_SESSION=array();

session_destroy();

header("location:register_form.php");//tekrar yönlendirme amaçlı

?>