<?php

    require APP.'/lib/render.php';
    require APP.'/lib/conn.php';

    $inUsr= filter_input(INPUT_POST, 'username',);
    $inPasswd= filter_input(INPUT_POST, 'passwd',);

if ($inUsr != null and $inPasswd != null) {

    setcookie('username',$inUsr,0,'/','localhost');
    setcookie('passwd',$inPasswd,0,'/','localhost');

    header("Location: ?url=dashboard");

} else {

    header("Location: ?url=badlogin");
}

