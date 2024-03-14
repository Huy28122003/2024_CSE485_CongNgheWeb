<?php
require_once root.'/service/DepartmentService.php';
class DepartmentController{
    public function index(){
        // Get data from database
        $departmentService = new DepartmentService();

        $departments = $departmentService->getTenDepartment();
        // push data to view
        include root.'/views/departments/index.php';
    }
    public function add(){

    }

    public function profile(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $departmentService = new DepartmentService();
            // $department = $departmentService->;
        }

        include root.'/views/departments/profile.php';
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = $_POST['name'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $logo = $_POST['logo'];
            $website = $_POST['website'];
            $parentDepartmentId = $_POST['parentDepartmentId'];
            $departmentService = new DepartmentService();
            $result = $departmentService->addDepartment($name, $address, $email, $phone, $logo, $website, $parentDepartmentId);
            if($result){
                header('Location: index.php?controller=department&action=index&msg=ok');
            } else {
                header('Location: index.php?controller=department&action=add$msg=!ok');
            }
        }
        include root.'/views/departments/add.php';
    }

    public function detail(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $departmentService = new DepartmentService();
            $department = $departmentService->getDepartmentById($id);
            include root.'/views/departments/detail.php';
        }
    }

    public function edit(){
            $id = $_GET['id'];
            echo $id;
            $departmentService = new DepartmentService();
            $department = $departmentService->getDepartmentById($id);
        
           // echo $department->getId();
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                //echo $id;
                //echo $department;
                $name = $_POST['name'];
                $address = $_POST['address'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $logo = $_POST['logo'];
                $website = $_POST['website'];
                $parentDepartmentId = $_POST['parentDepartmentId'];

                $department->setName($name);
                $department->setAddress($address);
                $department->setEmail($email);
                $department->setPhone($phone);
                $department->setLogo($logo);
                $department->setWebsite($website);
                $department->setParentDepartmentID($parentDepartmentId);

                $result = $departmentService->updateDepartment($department);
                if($result){
                    header('Location: index.php?controller=department&action=index&msg=editok');
                } else {
                    header('Location: index.php?controller=department&action=edit&msg=edit!ok');
                }
            }

            include root.'/views/departments/edit.php';
        
        
        
    }
    public function delete(){
        header('Location: index.php?controller=department&action=index&msg=Không thể xóa vì đơn vị có nhân viên đang hoạt động');

    }
}
