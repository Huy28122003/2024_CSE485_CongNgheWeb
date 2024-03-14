<?php


require_once root . '/service/EmployeeService.php';
require_once root . '/service/UserService.php';

require_once root.'/service/DepartmentService.php';


class CurrentController
{
    public function index()
    {
        $employeeServices = new EmployeeService();
        $employees = $employeeServices->getEmployeelimit();

        $departmentServices = new DepartmentService();
        $departments = $departmentServices->getTenDepartmentlimit();
        include root . '/views/usercurrent/index.php';
    }

    public function employee()
    {
        include root . '/views/usercurrent/employees.php';
    }
    public function department()
    {
        include root . '/views/usercurrent/departments.php';
    }

    public function login()
    {

        session_start();
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        if(($_SERVER['REQUEST_METHOD'] == "POST")){
            $username = $_POST['username'];
            $passwordd = $_POST['passwordd'];
//            $query = "SELECT * FROM Users WHERE username='$username' AND passwordd='$passwordd'";
//            $result = mysqli_query($conn, $query);


            $userServices = new UserService();
            $user = $userServices->getUerByName($username,$passwordd);


            if($user){
                if($user->getName() == $username && $user->getPass()==$passwordd){
                    if($user->getRole() == 'admin'){
                        $_SESSION['username'] = $username;
                        $_SESSION['rolee'] = 'admin';
                        header('Location: index.php?controller=department&msgg='.$user->getName().'&idd='.$user->getEmployeeID());
                    }
                    else{
                        $_SESSION['username'] = $username;
                        $_SESSION['rolee'] = 'regular';
                        header('Location: index.php?msg='.$user->getName().'&idd='.$user->getEmployeeID());
                    }
                }

            }
            else{
                header('Location: index.php?controller=current&action=login&msg=Đăng nhập thất bại');
            }
        }

            include root . '/views/usercurrent/login.php';

    }

    public function profile()
    {
        $tk = $_GET['msg'];
        $id = $_GET['idd'];
        $employeeService = new EmployeeService();
        $employee = $employeeService->getEmployeeById($id);

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

            $result = $employeeService->updateEmployee($employee);
            if($result){
                header('Location: index.php?controller=current&action=profile&msg='.$tk.'&idd='.$id.'&success= Sửa thành công');
            } else {
                header('Location: index.php?controller=current&action=profile&msg='.$tk.'&idd='.$id);
            }
        }


        include root . '/views/usercurrent/profile.php';
    }

    public function detail()
    {
        $id = $_GET['id'];
        $employeeServices = new EmployeeService();
        $employee = $employeeServices->getEmployeeById($id);
        if ($employee) {
            include root . '/views/usercurrent/detail_employee.php';
        } else{
            echo "ko thấy";
        }
    }

    public function detailde()
    {
        $id = $_GET['id'];
        $departmentServices = new DepartmentService();
        $department = $departmentServices->getDepartmentById($id);
        if($department){
            include root.'/views/usercurrent/detail_department.php';
        } else{
            echo "ko thấy";
        }
    }


}
