<?php
class loginController extends Controller
{   
    
    public function __construct()
    {
        
        $this->userModel = $this->model('userModel');
    }
    public function index()
    {   
        session_start();
       if(isset($_SESSION['sess_user_id']) && $_SESSION['sess_user_id'] != "") {
            header("Location: /admin");
        } 
   
        $this->view('login\index', [
        ]);
        $this->view->render();
       
    }
    public function loginAction()
    {   
        //  
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $arr= [$email,$password];
        $data = $this->userModel->login($arr);
        if($data["count"] == 1){
            session_start();
            $_SESSION['sess_user_id'] =$data["row"]["id"];
            $_SESSION['sess_user_name'] = $data["row"]["email"];
            $_SESSION['sess_name'] = $data["row"]["email"];
            // die(var_dump($_SESSION));
            header("Location: /admin");
        }else{
            session_start();
            $_SESSION['msg'] = "wrong password or email";
            header("Location: /login");
        }
    }

    public function logout()
    {
        session_start();
        // $_SESSION['sess_user_id'] = "";
        // $_SESSION['sess_username'] = "";
        // $_SESSION['sess_name'] = "";
        session_destroy();
        // if(empty($_SESSION['sess_user_id']))
        header("Location: /login");
    }
}