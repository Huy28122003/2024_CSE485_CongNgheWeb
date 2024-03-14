<?php

require_once root.'/service/EmployeeService.php';
require_once root.'/service/DepartmentService.php';

class CurrentController
{
    public function index()
    {
        $employeeService = new EmployeeService();
        $employees = $employeeService->getEmployeelimit();
        include root.'/views/usercurrent/index.php';
    }
    public function employee()
    {
        include root.'/views/usercurrent/employees.php';
    }
    public function login()
    {
        include root.'/views/usercurrent/login.php';
    }
    public function detail()
    {
        $id = $_GET['id'];
        $employeeService = new EmployeeService();
        $employee = $employeeService->getEmployeeById($id);
        if($employee){
            include root.'/views/usercurrent/detail_employee.php';
        } else{
            echo "ko thấy";
        }
    }

    public function detailde()
    {
        $id = $_GET['id'];
        $departmentService = new DepartmentService();
        $department = $departmentService->getDepartmentById($id);
        if($department){
            include root.'/views/usercurrent/detail_department.php';
        } else{
            echo "ko thấy";
        }
    }
    public function department(){
        include root.'/views/usercurrent/departments.php';

    }
}
