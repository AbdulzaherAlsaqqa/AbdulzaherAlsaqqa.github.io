<?php
namespace controler;

class UserController {
    private $model;
    public $table = 'users';

    public function __construct($model) {
        $this->model = $model;
    }

    public function index(){
        $users = $this->model->getUsers();

        include 'app/views/user_list.php';
    }

    public function addUser(){
        include 'app/views/add_user.php';
        if($_SERVER ['REQUEST_METHOD'] === 'POST'){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $role = $_POST['role'];
            $data = [
                'username' => $username,
                'password' => $password,
                'role' => $role==='normal'?0:1 // تحويل القيمة إلى 1 أو 0
            ];

            if($this->model->addUser($data))
            {
                echo "User Added Sucssesfuly ";
                header ('location:index.php');
            } else {
                echo "Faled to Adeded User";
            }
        }
    }

    public function updateUser(){
        include 'app/views/update_user.php';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $new_username = $_POST['username'];
            $new_password = $_POST['password'];
            $new_role = $_POST['role'];
            $data = [
                'username' => $new_username,
                'password' => $new_password,
                'role' => $new_role==='normal'?0:1 // تحويل القيمة إلى 1 أو 0
            ];
        
            // if ($_SESSION['user_id'] !== 1) {
            //     echo "You don't have permission to edit this user.";
            //     exit;
            // }
        
            if($this->model->updateUser($user_id, $data))
                {
                    echo "user updated successfully!";
                    header('Location: index.php');
                }else{
                    echo "Faled to Updated User";
                }
        }
    }

    public function deleteUser() {
        $user_id= $_GET['id'];    
        if($this->model->deleteUser($user_id))
            {
                echo "user deleted successfully!";
                header('Location: index.php');
            }else{
                echo "Faled to delete User";
            }
    }

    public function getUser() {
        $user_id= $_GET['id'];
        $user = $this->model->getUesr($user_id);
    }


}