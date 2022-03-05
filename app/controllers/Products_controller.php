
<?php

class Products_controller extends Controller
{
    public function __construct()
    {
        $this->productsModel = $this->model('Product');
    }
    public function viewProduct()
    {
        $products = $this->productsModel->productList();
        // die(print_r($users));
        $data = [
            'users' => $products,
            'counter' => 0,
            'title' => 'View User'
        ];
        $this->view('admin/pages/user/index', $data);
    }
    public function addProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // die('submitted');
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'title' => trim($_POST['title']),
                'pid' => trim($_POST['pid']),
                'price' => trim($_POST['price']),
                'unit' => trim($_POST['unit']),
                'image' => trim($_POST['image']),
            ];
            // die(print_r($data));
            if ($this->productsModel->addProduct($data))
                flash('added', 'products added');
            redirect('pages/addProductPage');
        }
    }
    public function dltProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // die('submitted');
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'id' => $_POST['id']

            ];
            // die($data['id']);
            if ($this->productsModel->dltData($data['id'])) {
                redirect('users/viewUser');
            }
        }
    }
    public function Product()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // die('submitted');
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'id' => $_POST['id'],
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'role' => trim($_POST['role'])

            ];
            // die(print_r($data));
            if ($this->productsModel->editData($data)) {
                redirect('users/viewUser');
            }
        }
    }
}

?>