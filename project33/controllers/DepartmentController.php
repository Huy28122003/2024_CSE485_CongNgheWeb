<?php
require_once root.'/service/DepartmentService.php';
class DepartmentController{
    public function index(){
        // Get data from database
        $departmentService = new DepartmentService();
        $departments = $departmentService->getAllDepartment();
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
    }
}
