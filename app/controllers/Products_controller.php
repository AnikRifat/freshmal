
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


        // $imageName = $_FILES['img']['name'];
        // $tempImageName = $_FILES['img']['temp_name'];
        // $uploc = IMGROOT . $imageName;
        $_POST = filter_input_array(INPUT_POST);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $fileName = "";
            $path = IMGROOT;
            $upLoc = "";
            // die(($_FILES['productImg']['tmp_name']));

            if (($_FILES['productImg'])) {
                // die($_SERVER['DOCUMENT_ROOT']);
                $info = $_FILES['productImg']['name'];
                // die(var_dump($info));
                $fileName =  uniqid() . $info;
                $temp_loc = $_FILES['productImg']['tmp_name'];
                // die($temp_loc);

                $upLoc = $_SERVER['DOCUMENT_ROOT'] . '/freshmal/public/img/' . $fileName;
                // die($upLoc);
            } else {
                $fileName = $path . 'avatar.jpg';
            }
            $data = [
                'title' => trim($_POST['title']),
                'pid' => trim($_POST['pid']),
                'price' => trim($_POST['price']),
                'unit' => trim($_POST['unit']),
                'image' => trim($path . $fileName)
            ];
            // die(print_r($data));
            if ($this->productsModel->addProduct($data)) {

                move_uploaded_file($temp_loc, $upLoc);
                flash('added', 'products added');
                redirect('pages/addProductPage');
            } else {
                die($data);
            }
        }
    }
    public function dltProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // die('submitted');

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'id' => $_POST['idF'],
            ];
            // die($_POST['idF']);
            // die($data['id']);
            if ($this->productsModel->dltData($data['id'])) {
                // die('success');
                redirect('pages/viewProductPage');
                // $this->view('admin/pages/product/index', $data);
            } else {
                die('error');
                redirect('pages/viewProductPage');

                // $msg = "err";
                // $this->view('admin/pages/product/index', $data);
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
                redirect('Users_controller/viewUser');
            }
        }
    }
}

?>