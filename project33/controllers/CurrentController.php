<?php


require_once root . '/service/EmployeeService.php';
require_once root . '/service/UserService.php';

require_once root.'/service/DepartmentService.php';


class CurrentController
{
    public function index()
    {
        $employeeService = new EmployeeService();
        $employees = $employeeService->getEmployeelimit();

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


            $userService = new UserService();
            $user = $userService->getUerByName($username,$passwordd);


            if($user){
                if($user->getName() == $username && $user->getPass()==$passwordd){
                    if($user->getRole() == 'admin'){
                        $_SESSION['username'] = $username;
                        $_SESSION['rolee'] = 'admin';
                        header('Location: index.php?controller=department&msgg='.$user->getName().'&id='.$user->getEmployeeID());
                    }
                    else{
                        $_SESSION['username'] = $username;
                        $_SESSION['rolee'] = 'regular';
                        header('Location: index.php?msg='.$user->getName().'&id='.$user->getEmployeeID());
                    }
                }

            }
            else{
                header('Location: index.php?controller=current&action=login&msg=Đăng nhập thất bại');
            }
        }

            include root . '/views/usercurrent/login.php';

    }

    public function detail()
    {
        $id = $_GET['id'];
        $employeeService = new EmployeeService();
        $employee = $employeeService->getEmployeeById($id);
        if ($employee) {
            include root . '/views/usercurrent/detail_employee.php';
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


}
