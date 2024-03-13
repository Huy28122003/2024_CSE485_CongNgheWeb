<?php

require_once root.'/service/EmployeeService.php';

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
}
