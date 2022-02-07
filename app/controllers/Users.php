
<?php

class Users extends Controller
{
    public function __construct()
    {
        # code...
    }
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // echo "proccessing";
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                // 'title' => 'register',
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'login_error' => ''
            ];

            if (empty($data['email']) || empty($data['password'])) {
                $data['login_error'] = 'plaease enter the fied';
                $this->view('front/pages/login', $data);
            }
        } else {
            $data = [
                'title' => 'login',
                'email' => '',
                'password' => '',
                'email_error' => '',
                'password_error' => ''
            ];
            $this->view('front/pages/login', $data);
        }
    }
    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // die('submitted');
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                // 'title' => 'register',
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirm_password' => trim($_POST['confirm_password']),
                'register_error' => ''
            ];

            if (empty($data['email']) || empty($data['password']) || empty($data['name'])) {
                $data['register_error'] = 'plaease enter the field';
                $this->view('front/pages/register', $data);
            }
        } else {
            $data = [
                'title' => 'register',
                'name' => '',
                'email' => '',
                'password' => '',
                'confirm_password' => '',
            ];
            $this->view('front/pages/register', $data);
        }
    }
}

?>