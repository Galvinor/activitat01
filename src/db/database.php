<?php

function auth($db,$email,$pass):bool
    {
        
        try{   
            
            $stmt=$db->prepare('SELECT * FROM USERS WHERE email=:email LIMIT 1');
            $stmt->execute([':email'=>$email]);
            $count=$stmt->rowCount();
            $row=$stmt->fetchAll(PDO::FETCH_ASSOC);  
            
            if($count==1){       
                $user=$row[0];
                $res=password_verify($pass,$user['passwd']);
               
                if ($res){
                $_SESSION['username']=$user['username'];
                $_SESSION['email']=$user['email'];
           
                    return true;
                }else{
                    return false;
                }
            }else{
                return false;
            }
        }catch(PDOException $e){
            return false;
        }
    }

    function insert($db,$table,$usr,$pass,$email):bool 
    {
       if ($usr!=null and $pass !=null and $email != null){
        $stmt= $db->prepare("INSERT INTO $table(userame,passwd,email) VALUES (?,?,?)");
            $stmt->bindParam(1,$usr);
            $stmt->bindParam(2,password_hash($pass,PASSWORD_BCRYPT));
            $stmt->bindParam(3,$email);
            $stmt->execute([$usr,password_hash($pass,PASSWORD_BCRYPT),$email]);
            
            
            return true;
            }
            return false;
        }