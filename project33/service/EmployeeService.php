<?php

require_once root.'/models/Employee.php';

class EmployeeService
{
    public function getEmployeelimit()
    {
        $dbConnections = new DBConnection();
        $conn = $dbConnections->getConnection();

        if($conn != null){
            $sql = "select * from employees LIMIT 6";
            $smtm = $conn->query($sql);

            $employees = [];
            while ($row = $smtm->fetch()){
                $employee = new Employee($row['employeeID'], $row['fullname'], $row['address'],
                    $row['email'], $row['mobilePhone'], $row['positionn'], $row['avatar'], $row['departmentID']);

                $employees[] =$employee;
            }
            return $employees;
        }
    }
    public function getAllEmployee()
    {
        $dbConnections = new DBConnection();
        $conn = $dbConnections->getConnection();

        if($conn != null){
            $sql = "select * from employees";
            $smtm = $conn->query($sql);

            $employees = [];
            while ($row = $smtm->fetch()){
                $employee = new Employee($row['employeeID'], $row['fullname'], $row['address'],
                    $row['email'], $row['mobilePhone'], $row['positionn'], $row['avatar'], $row['departmentID']);

                $employees[] =$employee;
            }
            return $employees;
        }
    }

    public function addEmployee($employee)
    {
        $dbConnections = new DBConnection();
        $conn = $dbConnections->getConnection();

        if($conn != null){
            $sql = "insert into employees (fullname, address, email, mobilePhone, positionn, avatar, departmentID)
                     VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([
                $employee->getFullname(),
                $employee->getAddress(),
                $employee->getEmail(),
                $employee->getPhone(),
                $employee->getPosition(),
                $employee->getAvatar(),
                $employee->getDepartmentID(),
            ]);
            if($stmt->rowCount() > 0){
                return true;
            }
        }
        return false;
    }

    public function getEmployeeById($id)
    {
        $dbConnections = new DBConnection();
        $conn = $dbConnections->getConnection();
        if ($conn != null){
            $sql = "select * from employees where employeeID=?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$id]);

            if($stmt->rowCount() > 0){
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                $employee = new Employee($id, $row['fullname'], $row['address'], $row['email'], $row['mobilePhone'], $row['positionn'], $row['avatar'], $row['departmentID']);
                return $employee;
            }
        }
        return null;
    }

    public function updateEmployee($employee)
    {
        $dbConnections = new DBConnection();
        $conn = $dbConnections->getConnection();

        if($conn != null){
            $sql = "update employees set fullname=?, address=?, email=?, mobilePhone=?, positionn=?, avatar=?, 
                     departmentID=? where employeeID=?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([
                $employee->getFullname(),
                $employee->getAddress(),
                $employee->getEmail(),
                $employee->getPhone(),
                $employee->getPosition(),
                $employee->getAvatar(),
                $employee->getDepartmentID(),
                $employee->getId()
            ]);
            if($stmt->rowCount() > 0){
                return true;
            }
        }
        return false;
    }

    public function deleteEmployeeById($id)
    {
        $dbConnections = new DBConnection();
        $conn = $dbConnections->getConnection();

        if($conn != null){
            $sql = "delete from employees where employeeID=?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$id]);

            if($stmt->rowCount() > 0){
                return true;
            }
        }
        return false;
    }
}