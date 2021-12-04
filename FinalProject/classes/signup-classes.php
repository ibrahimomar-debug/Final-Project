<?php

class Signup extends Dbh{
    
    protected function setUser($firstName,$lastName,$middleName,$officePosition,$adminUsername,$adminPassword){

        
        $stmt = $this->connect()->prepare('INSERT INTO admins_db (firstName, lastName, midName, officePosition, username, pwd ) VALUES (?,?,?,?,?,?);');

        $pwdHashed = password_hash($adminPassword,PASSWORD_DEFAULT);



        if(!$stmt->execute(array($firstName,$lastName,$middleName,$officePosition,$adminUsername,$pwdHashed))){
            $stmt = null;
            header("location: ../Manage_Admin.php?error=StatementFailed");
            exit();
        }
        $stmt = null;
    }
    
    protected function checkUser($stud_num){
        $stmt = $this-> connect()->prepare('SELECT userid FROM admins_db WHERE username = ? ');

        if(!$stmt->execute(array($stud_num))){
            $stmt = null;
            header("location: ../Manage_Admin.php?error=StatementFailed");
            exit();
        }
        $resultCheck;
        if($stmt->rowCount() >0 ){
            $resultCheck = false;
        }
        else{
            $resultCheck = true;
        }
        return $resultCheck;
    }

}

class SignupResident extends Dbh{
    
    protected function setUserResident($famName,$fName,$mName,$alias,$fmark,$bdate,$bplace,$sexOption,$civilStatus,$nation,$relbel,$occupation,$spname,$spOccu,$voterOption,$cityAdd,$provinceAdd,$purok,$emailAdd,$hNumberOne,$hNumberTwo,$mNumberOne,$mNumberTwo,$resType,$resStatus){

        
        $stmt = $this->connect()->prepare('INSERT INTO residentinfo_table (famName, firstName, midName, alias, faceMarks, birthday,birthplace,gender, civilStatus, nationality, religion, occupation, spouseName,spouceOccupation, votertStatus, cityAddress, provincialAddress, purok, emailAddress,homeNumber1, homeNumber2, mobileNumber1, mobileNumber2, residentType, residentStatus) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);');





        if(!$stmt->execute(array($famName,$fName,$mName,$alias,$fmark,$bdate,$bplace,$sexOption,$civilStatus,$nation,$relbel,$occupation,$spname,$spOccu,$voterOption,$cityAdd,$provinceAdd,$purok,$emailAdd,$hNumberOne,$hNumberTwo,$mNumberOne,$mNumberTwo,$resType,$resStatus))){
            $stmt = null;
            header("location: ../Manage_Admin.php?error=StatementFailed");
            exit();
        }
        $stmt = null;
    }
    
    // protected function checkUser($stud_num){
    //     $stmt = $this-> connect()->prepare('SELECT userid FROM admins_db WHERE username = ? ');

    //     if(!$stmt->execute(array($stud_num))){
    //         $stmt = null;
    //         header("location: ../Manage_Admin.php?error=StatementFailed");
    //         exit();
    //     }
    //     $resultCheck;
    //     if($stmt->rowCount() >0 ){
    //         $resultCheck = false;
    //     }
    //     else{
    //         $resultCheck = true;
    //     }
    //     return $resultCheck;
    // }

}

class SignIn extends Dbh{
    protected function updateUser($userid,$fname,$lname,$stud_num,$yrlvl,$program,$email,$phonenumber,$month,$day,$year,$sex){

        
        $stmt = $this->connect()->prepare('UPDATE users SET user_fname=?,user_lname=?,user_studnum=?,user_yrlvl=?,user_program=?,user_email=?,user_phonenumber=?,user_month=?,user_day=?,user_year=?,user_sex=? WHERE userid =?;');



        if(!$stmt->execute(array($fname,$lname,$stud_num,$yrlvl,$program,$email,$phonenumber,$month,$day,$year,$sex,$userid))){
            $stmt = null;
            header("location: ../signup.php?error=StatementFailed");
            exit();
        }
        $stmt = null;
    }
 
}
class deleteAccount extends Dbh{
    protected function deleteUser($userid){

        $stmt = $this->connect()->prepare('DELETE FROM users WHERE userid=?');

        if(!$stmt->execute(array($userid))){
            $stmt = null;
            header("location: ../signup.php?error=StatementFailed");
            exit();
        }
        $stmt = null;
    }
 
}
