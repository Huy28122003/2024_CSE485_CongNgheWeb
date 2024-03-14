<?php

require_once root.'/service/EmployeeService.php';


class EmployeeController
{
    public function index()
    {
        $employeeServices = new EmployeeService();
        $employees = $employeeServices->getAllEmployee();

        include root.'/views/employees/index.php';
    }

    public function add()
    {
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $username = $_POST['username'];
            $add = $_POST['address'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $position = $_POST['position'];
            $avatar = $_POST['avatar'];
            $de = $_POST['departmentID'];

            if(empty($username) || empty($add) || empty($email) || empty($phone) || empty($position) || empty($avatar) || empty($de)){
                echo "Dữ liệu khong hợp lệ";
                exit;
            }

            $employee = new Employee(null, $username, $add, $email, $phone, $position, $avatar, $de);
            $employeeServices = new EmployeeService();

            $result = $employeeServices->addEmployee($employee);
            if($result){
                header('Location: index.php?controller=employee&action=index&msg=Đăng kí thành công');
            } else {
                header('Location: index.php?controller=employee&action=add');
            }
        }
        include root.'/views/employees/add.php';
    }

    public function edit()
    {
        $id = $_GET['id'];
        $employeeServices = new EmployeeService();
        $employee = $employeeServices->getEmployeeById($id);

        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            $username = $_POST['username'];
            $add = $_POST['address'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $position = $_POST['position'];
            $avatar = $_POST['avatar'];
            $de = $_POST['departmentID'];

            $employee->setFullname($username);
            $employee->setAddress($add);
            $employee->setEmail($email);
            $employee->setPhone($phone);
            $employee->setPosition($position);
            $employee->setAvatar($avatar);
            $employee->setDepartmentID($de);

            $result = $employeeServices->updateEmployee($employee);
            if($result){
                header('Location: index.php?controller=employee&action=index&msg= Sửa thành công');
            } else {
                header('Location: index.php?controller=employee&action=edit');
            }
        }
        include root.'/views/employees/edit.php';
    }

    public function detail()
    {
        $id = $_GET['id'];
        $employeeServices = new EmployeeService();
        $employee = $employeeServices->getEmployeeById($id);
        if($employee){
            include root.'/views/employees/detail.php';
        } else{
            echo "ko thấy";
        }
    }
    public function delete()
    {
        $id = $_GET['id'];
        $employeeServices = new EmployeeService();
        $employee = $employeeServices->deleteEmployeeById($id);

        if($employee){
            header('Location: index.php?controller=employee&action=index&msg= Xóa thành công');
        } else {
            header('Location: index.php?controller=employee&action=index');
        }
    }
}

