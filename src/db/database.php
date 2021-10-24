<?php

// $stmt = $db->prepare("INSERT INTO USERS (username, passwd, email, teacherstatus) VALUES (?, ?)");

// $username = "Sheev";
// $passwd = "emperor";
// $email = "trueemperor@gmail.com";
// $teacherstatus = 1;

// $stmt->bindParam(1, $username);
// $stmt->bindParam(2, $passwd);
// $stmt->bindParam(3, $email);
// $stmt->bindParam(4, $teacherstatus);

// $stmt->execute();


// function auth($db,$email,$pass):bool   {
// try{
// //preparem sentència            
// $stmt=$db->prepare('SELECT * FROM users WHERE email=:email LIMIT 1');            
// $stmt->execute([':email'=>$email]);            
// $count=$stmt->rowCount();            
// $row=$stmt->fetchAll(PDO::FETCH_ASSOC);              
// // ha trobat incidència            
// if($count==1){                       
// $user=$row[0];                
// $res=password_verify($pass,$user['passw']);                               
// if ($res){                
// // establim sessió                  
// $_SESSION['uname']=$user['uname'];                  
// $_SESSION['email']=$user['email'];                
// // retornem true                    
// return true;                
// }else{                    
// return false;                
// }            
// }else{                
// return false;            
// }        
// }catch(PDOException $e){            
//     return false;        
// }    
// }