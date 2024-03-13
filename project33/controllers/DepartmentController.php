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
}
