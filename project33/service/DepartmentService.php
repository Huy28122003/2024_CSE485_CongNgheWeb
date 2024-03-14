<?php
require_once root.'/models/Department.php';
class DepartmentService {


    public function getTenDepartmentlimit(){
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();
        if($conn!= null){
            $sql = "select * from departments limit 3";
            $smtm = $conn->query($sql);

            $departments = [];
            while ($row = $smtm->fetch()){
                $department = new Department($row['departmentID'],$row['departmentName'],$row['address'],$row['email'],$row['phone'],$row['logo'],$row['website'],$row['parentDepartmentID']);
                $departments [] = $department;
            }
            return $departments;
        }
    }


    public function getTenDepartment(){
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();
        if($conn!= null){
            $sql = "select * from departments limit 10";
            $smtm = $conn->query($sql);

            $departments = [];
            while ($row = $smtm->fetch()){
                $department = new Department($row['departmentID'],$row['departmentName'],$row['address'],$row['email'],$row['phone'],$row['logo'],$row['website'],$row['parentDepartmentID']);
                $departments [] = $department;
            }
            return $departments;
        }
    }


    public function getDepartmentById ($id){
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();
        if ($conn != null){
            $sql = "select * from departments where departmentID=?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$id]);

            if($stmt->rowCount() > 0){
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                $department = new Department($id, $row['departmentName'], $row['address'], $row['email'], $row['phone'], $row['logo'], $row['website'], $row['parentDepartmentID']);
                return $department;
            }
        }
        return null;
    }

    public function addDepartment ($name, $address,$email, $phone, $logo, $website, $parent){
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        if($conn != null){
            $sql = "insert into departments (departmentName, address, email, phone, logo, website, parentDepartmentID)
                     VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([
                $name,
                $address,
                $email,
                $phone,
                $logo,
                $website,
                $parent,
            ]);
            if($stmt->rowCount() > 0){
                return true;
            }
        }
        return false;
    }

    public function updateDepartment ($department){
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        if($conn != null){
            $sql = "update departments set departmentName=?, address=?, email=?, phone=?, logo=?, website=?, 
                     parentDepartmentID=? where departmentID=?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([

                $department->getName(),
                $department->getAddress(),
                $department->getEmail(),
                $department->getPhone(),
                $department->getLogo(),
                $department->getWebsite(),
                $department->getParentDepartmentID(),
                $department->getId(),
            ]);
            if($stmt->rowCount() > 0){
                return true;
            }
        }
        return false;
    }

}
