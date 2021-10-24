<?php

    require APP.'/lib/render.php';
    require APP.'/lib/conn.php';
    require APP.'/src/db/database.php';

    $inUsr= filter_input(INPUT_POST, 'username');
    $inPasswd= filter_input(INPUT_POST, 'passwd');
    $inEmail= filter_input(INPUT_POST, 'email');
    

if ($inUsr != null and $inPasswd != null and $inEmail != null) {

$gdb= getConnection($dsn, $dbuser, $dbpasswd);

$data= [$inUsr,$inPasswd,$inEmail];
$table= 'USERS';

insert($gdb,$table,$data);

setcookie('email',$inEmail,0,'/','localhost');
setcookie('user',$inUsr,0,'/','localhost');

    header("Location: ?url=dashboard");

} else {

    header("Location: ?url=badlogin");
}

