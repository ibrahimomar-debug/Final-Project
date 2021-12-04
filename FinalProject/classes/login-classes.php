<?php

class Login extends Dbh{


    protected function getUser($uid,$pwd){
        

        $stmt = $this->connect()->prepare('SELECT pwd FROM admins_db WHERE username=?;');

        if(!$stmt->execute(array($uid))){
            $stmt = null;
            header("location: ../index.php?error=StatementFailed");
            exit();
        }

        if($stmt->rowCount() == 0 ){
            $stmt = null;
            header("location: ../index.php?error=UserNotFound");
            exit();
        }

        $pwdHashed = $stmt->fetch(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($pwd,$pwdHashed["pwd"]);

        if($checkPwd == false){
            $stmt = null;

            header("location: ../index.php?error=WrongInputPassword");
            exit();
        }

        elseif($checkPwd == true){

            $stmt = $this->connect()->prepare('SELECT * FROM admins_db WHERE username=?;');

            if(!$stmt->execute(array($uid))){
                $stmt = null;
                header("location: ../index.php?error=statementfailed");
                exit();
            }

            if($stmt->rowCount() == 0 ){
                $stmt = null;
                header("location: ../index.php?error=usernotfound");
                exit();
            }

            $user= $stmt->fetch(PDO::FETCH_ASSOC);

            session_start();



        }

        $stmt = null;

    }

}