<?php

    require APP.'/lib/render.php';
    require APP.'/lib/conn.php';

    $inUsr= filter_input(INPUT_POST, 'username',);
    $inPasswd= filter_input(INPUT_POST, 'passwd',);
    $inEmail= filter_input(INPUT_POST, 'email',);

if ($inUsr != null and $inPasswd != null and $inEmail != null) {


try{
    
    
         $stmt= $gdb->prepare("INSERT INTO USERS(username,passwd,email) VALUES (?,?,?)");
        $stmt->bindParam(1,$inUsr);
        $stmt->bindParam(2,$inPasswd);
        $stmt->bindParam(3,$inEmail);
        $stmt->execute([$inUsr,$inPasswd,$inEmail]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }


    header("Location: ?url=dashboard");

} else {

    header("Location: ?url=badlogin");
}

