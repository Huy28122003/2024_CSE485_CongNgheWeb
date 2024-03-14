<?php

class Employee
{
    private $id;
    private $fullname;
    private $address;
    private $email;
    private $phone;
    private $position;
    private $avatar;
    private $departmentID;

    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }


    public function getFullname()
    {
        return $this->fullname;
    }


    public function setFullname($fullname)
    {
        $this->fullname = $fullname;
        return $this;
    }


    public function getAddress()
    {
        return $this->address;
    }


    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }


    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }


    public function getPhone()
    {
        return $this->phone;
    }


    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }


    public function getPosition()
    {
        return $this->position;
    }


    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }


    public function getAvatar()
    {
        return $this->avatar;
    }


    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
        return $this;
    }

    public function getDepartmentID()
    {
        return $this->departmentID;
    }


    public function setDepartmentID($departmentID)
    {
        $this->departmentID = $departmentID;
        return $this;
    }

    public function __construct($id, $fullname, $address, $email, $phone, $position, $avatar, $departmentID)
    {
        $this->id = $id;
        $this->fullname = $fullname;
        $this->address = $address;
        $this->email = $email;
        $this->phone = $phone;
        $this->position = $position;
        $this->avatar = $avatar;
        $this->departmentID = $departmentID;
    }



}

//canhpushh