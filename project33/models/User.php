
<?php
class User{
    private $name;
    private $pass;
    private $role;

    private $employeeID;

    /**
     * @param $name
     * @param $pass
     * @param $role
     * @param $employeeID
     */
    public function __construct($name, $pass, $role, $employeeID)
    {
        $this->name = $name;
        $this->pass = $pass;
        $this->role = $role;
        $this->employeeID = $employeeID;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * @param mixed $pass
     */
    public function setPass($pass)
    {
        $this->pass = $pass;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * @return mixed
     */
    public function getEmployeeID()
    {
        return $this->employeeID;
    }

    /**
     * @param mixed $employeeID
     */
    public function setEmployeeID($employeeID)
    {
        $this->employeeID = $employeeID;
    }




}

