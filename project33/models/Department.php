<?php
class Department{
    private $id;
    private $name;
    private $address;
    private $email;
    private $phone;
    private $logo;
    private $website;
    private $parentDepartmentId;

    public function __construct($id, $name, $address, $email,$phone,$logo,$website,$parentDepartmentId)
    {
        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
        $this->email = $email;
        $this->phone = $phone;
        $this->logo = $logo;
        $this->website = $website;
        $this->parentDepartmentId = $parentDepartmentId;
    }
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }

    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function getAddress(){
        return $this->address;
    }
    public function setAddress($address){
        $this->address = $address;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function getPhone(){
        return $this->phone;
    }
    public function setPhone($phone){
        $this->phone = $phone;
    }
    public function getLogo(){
        return $this->logo;
    }
    public function setLogo($logo){
        $this->logo = $logo;
    }
    public function getWebsite(){
        return $this->website;
    }
    public function setWebsite($website){
        $this->website = $website;
    }
    public function getParentDepartmentId(){
        return $this->parentDepartmentId;
    }
    public function setParentDepartmentId($parentDepartmentId){
        $this->parentDepartmentId = $parentDepartmentId;
    }

}
