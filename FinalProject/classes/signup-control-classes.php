<?php

class SignupController extends Signup{
    private $firstName;
    private $lastName;
    private $middleName;
    private $officePosition;
    private $adminUsername;
    private $adminPassword;
    private $adminConfirmPassword;

    public function __construct($firstName,$lastName,$middleName,$officePosition,$adminUsername,$adminPassword,$adminConfirmPassword){

        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->stud_num = $stud_num;
        $this->middleName = $middleName;
        $this->officePosition = $officePosition;
        $this->adminUsername = $adminUsername;
        $this->adminPassword = $adminPassword;
        $this->adminConfirmPassword = $adminConfirmPassword;
    }

    public function signupUser(){


        if($this->uidTakenCheck() == false){
            header("location: ../Manage_Admin.php?error=UsernameAlreadyTaken");
            exit();
        }
        if($this->pwdmatch()==false){
            header("location: ../Manage_Admin.php?error=PasswordDoesNotMatch");
            exit();
        }

        $this->setUser($this->firstName,$this->lastName,$this->middleName,$this->officePosition,$this->adminUsername,$this->adminPassword);
    }

    private function uidTakenCheck(){
        $result;
        if(!$this->checkUser($this->adminUsername)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }    
    private function pwdmatch(){
        $result;
        if($this->adminPassword ==$this->adminConfirmPassword ){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }
}
class SignupResidentController extends SignupResident{
    private $famName;
    private $fName;
    private $mName;
    private $alias;
    private $fmark;
    private $bdate;
    private $bplace;
    private $sexOption;
    private $civilStatus;
    private $nation;
    private $relbel;
    private $occupation;
    private $spname;
    private $spOccu;
    private $voterOption;
    private $cityAdd;
    private $provinceAdd;
    private $purok;
    private $emailAdd;
    private $hNumberOne;
    private $hNumberTwo;
    private $mNumberOne;
    private $mNumberTwo;
    private $resType;
    private $resStatus;

    public function __construct($famName,$fName,$mName,$alias,$fmark,$bdate,$bplace,$sexOption,$civilStatus,$nation,$relbel,$occupation,$spname,$spOccu,$voterOption,$cityAdd,$provinceAdd,$purok,$emailAdd,$hNumberOne,$hNumberTwo,$mNumberOne,$mNumberTwo,$resType,$resStatus){

        $this->famName = $famName;
        $this->fName = $fName;
        $this->mName = $mName;
        $this->alias = $alias;
        $this->fmark = $fmark;
        $this->bdate = $bdate;
        $this->bplace = $bplace;
        $this->sexOption = $sexOption;
        $this->civilStatus = $civilStatus;
        $this->nation = $nation;
        $this->relbel = $relbel;
        $this->occupation = $occupation;
        $this->spname = $spname;
        $this->spOccu = $spOccu;
        $this->voterOption = $voterOption;
        $this->cityAdd = $cityAdd;
        $this->provinceAdd = $provinceAdd;
        $this->purok = $purok;
        $this->emailAdd = $emailAdd;
        $this->hNumberOne = $hNumberOne;
        $this->hNumberTwo = $hNumberTwo;
        $this->mNumberOne = $mNumberOne;
        $this->mNumberTwo = $mNumberTwo;
        $this->resType = $resType;
        $this->resStatus = $resStatus;

    }

    public function signupUserResident(){


        // if($this->uidTakenCheck() == false){
        //     header("location: ../Manage_Admin.php?error=UsernameAlreadyTaken");
        //     exit();
        // }

        $this->setUserResident($this->famName,$this->fName,$this->mName,$this->alias,$this->fmark,$this->bdate,$this->bplace,$this->sexOption,$this->civilStatus,$this->nation,$this->relbel,$this->occupation,$this->spname,$this->spOccu,$this->voterOption,$this->cityAdd,$this->provinceAdd,$this->purok,$this->emailAdd,$this->hNumberOne,$this->hNumberTwo,$this->mNumberOne,$this->mNumberTwo,$this->resType,$this->resStatus);
    }

    // private function uidTakenCheck(){
    //     $result;
    //     if(!$this->checkUser($this->adminUsername)){
    //         $result = false;
    //     }
    //     else{
    //         $result = true;
    //     }
    //     return $result;
    // }    

}
