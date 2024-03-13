<?php
require_once root.'/models/Department.php';
class DepartmentService {
    public function getAllDepartment(){
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        if($conn!= null){
            $sql = "select * from departments";
            $smtm = $conn->query($sql);

            $departments = [];
            while ($row = $smtm->fetch()){
                $department = new Department($row['departmentID'],$row['departmentName'],$row['address'],$row['email'],$row['phone'],$row['logo'],$row['website'],$row['parentDepartmentID']);
                $departments [] = $department;
            }
            return $departments;
        }
    }
}
