<?php

function auth($db,$email,$pass):bool
    {
        
        try{   
            
            $stmt=$db->prepare('SELECT * FROM users WHERE email=:email LIMIT 1');
            $stmt->execute([':email'=>$email]);
            $count=$stmt->rowCount();
            $row=$stmt->fetchAll(PDO::FETCH_ASSOC);  
            
            if($count==1){       
                $user=$row[0];
                $res=password_verify($pass,$user['passw']);
               
                if ($res){
                $_SESSION['uname']=$user['uname'];
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

    function insert($db,$table,$data):bool 
    {
       if (is_array($data)){
          $columns='';$bindv='';$values=null;
            foreach ($data as $column => $value) {
                $columns.='`'.$column.'`,';
                $bindv.='?,';
                $values[]=$value;
            }
            $columns=substr($columns,0,-1);
            $bindv=substr($bindv,0,-1);
              
            $sql="INSERT INTO {$table}({$columns}) VALUES ({$bindv})";
            
                try{
                    $stmt=$db->prepare($sql);
                    $stmt->execute($values);
                }catch(PDOException $e){
                    echo $e->getMessage();
                    return false;
                }
            
            return true;
            }
            return false;
        }