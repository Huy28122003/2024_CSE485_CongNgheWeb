
<?php
class User{
    private $name;
    private $pass;
    private $role;

    private $employeeID=0;


    public function __construct($name, $pass, $role, $employeeID)
    {
        $this->name = $name;
        $this->pass = $pass;
        $this->role = $role;
        $this->employeeID = $employeeID;
    }


    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;
    }


    public function getPass()
    {
        return $this->pass;
    }


    public function setPass($pass)
    {
        $this->pass = $pass;
    }


    public function getRole()
    {
        return $this->role;
    }


    public function setRole($role)
    {
        $this->role = $role;
    }


    public function getEmployeeID()
    {
        return $this->employeeID;
    }

    public function setEmployeeID($employeeID)
    {
        $this->employeeID = $employeeID;
    }




}

