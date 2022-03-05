
<?php

class Api_controller extends Controller
{
    public function __construct()
    {
        $this->usersModel = $this->model('User');
        $this->productsModel = $this->model('Product');
    }
    public function userInfo()
    {
        $usersInfo = $this->usersModel->userList();

        $data = [
            'users' => $usersInfo
        ];
        $this->view('api/index', $data);
    }
}

?>