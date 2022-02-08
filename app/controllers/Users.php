
<?php

class Users extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('User');
    }
    public function login()
    {
        if ($this->userLogStatus() == true) {
            print_r('logind');
        } else {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // echo "proccessing";
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $data = [
                    // 'title' => 'register',
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password']),
                    'login_error' => '',
                    'login_success' => ''
                ];

                if (empty($data['email']) || empty($data['password'])) {
                    $data['login_error'] = 'plaease enter the fied';
                    $this->view('front/pages/login', $data);
                } else {
                    if ($this->userModel->findUserByEmail($data['email'])) {
                        // $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
                        $loginMethod = $this->userModel->logAuth($data['email'], $data['password']);
                        if ($loginMethod) {
                            $this->createUserSession($loginMethod);
                            // $data['login_success'] = 'Login Success!';
                            // $this->view('front/pages/index', $data);
                        } else {
                            $data['login_error'] = 'Password not matched ' . $data['password'];
                            $this->view('front/pages/login', $data);
                        }
                    } else {
                        $data['login_error'] = 'plaease enter the fied';
                        $this->view('front/pages/login', $data);
                    }
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
            } else {
                if ($this->userModel->findUserByEmail($data['email'])) {
                    $data['register_error'] = 'Email Already taken';
                    $this->view('front/pages/register', $data);
                } else {

                    if ($data['password'] == $data['confirm_password']) {
                        $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);

                        if ($this->userModel->register($data)) {
                            $data['register_success'] = "Registerd!  Now Please Login";
                            $this->view('front/pages/login', $data);
                        }
                    } else {
                        $data['register_error'] = 'Confirm Password Does not matched';
                        $this->view('front/pages/register', $data);
                    }
                }
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

    public function createUserSession($user)
    {

        // die(print_r($user));
        // die($user->id);
        $_SESSION['user_id'] = $user->id;
        $_SESSION['email'] = $user->email;
        $_SESSION['name'] = $user->name;
        // $_SESSION['id'] = $user->id;
        // die(print_r($_SESSION));
        // die($_SESSION['user_id']);
        redirect('pages/index');
        // die($_SESSION);
    }
    public function userLogStatus()
    {
        if (isset($_SESSION['user_id'])) {
            die(var_dump($_SESSION['user_id']));
            return true;
        } else {
            return false;
        }
    }
    public function logOut()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['email']);
        unset($_SESSION['name']);
        session_destroy();


        redirect('users/login');
    }
}

?>