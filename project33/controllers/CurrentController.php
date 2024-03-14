<?php

require_once root . '/service/EmployeeService.php';
require_once root . '/service/UserService.php';

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
                        header('Location: index.php?controller=department');
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




//            if (mysqli_num_rows($result) == 'admin') {
//                $_SESSION['username'] = $username;
//                $_SESSION['rolee'] = 'admin';
//                header('Location: index.php?controller=department');
//            } else if (mysqli_num_rows($result) == 'rengular' ) {
//                $_SESSION['username'] = $username;
//                $_SESSION['rolee'] = 'rengular';
//                header('Location: index.php ');
//            } else {
//                echo 'Tên đăng nhập hoặc mật khẩu không đúng.';
//            }
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
        } else {
            echo "ko thấy";
        }
    }


}
