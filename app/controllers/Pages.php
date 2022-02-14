<?php
class Pages extends Controller
{
  public function __construct()
  {
    $this->usersModel = $this->model('User');
    $this->productsModel = $this->model('Product');
    // $userFun = $this->usersModel;
  }
  //default routes....

  public function index()
  {

    // die($this->usersModel->checkAdmin($_SESSION['email']));

    if ($this->userLogStatus()) {
      if ($this->usersModel->checkAdmin($_SESSION['email'])) {
        redirect('pages/admin');
      } else {
        redirect('pages/home');
      }
    } else {
      redirect('pages/home');
    }
    // $this->view('front/pages/index', $data);
  }
  public function home()
  {
    $row = $this->productsModel->productList();
    $data = [
      'title' => 'Home',
      'products' => $row
    ];

    $this->view('front/pages/index', $data);
  }
  public function about()
  {
    $data = [
      'title' => 'About Us',
      'description' => 'App to share posts with other users'
    ];

    $this->view('front/pages/about', $data);
  }
  //default routes....

  //admin routes....
  public function admin()
  {
    $data = [
      'title' => 'Dashboard',
    ];

    $this->view('admin/pages/index', $data);
  }
  public function viewUser()
  {

    $data = [
      'title' => 'User',
    ];
    $this->view('admin/pages/user/index', $data);
  }
  public function editUserPage()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $row = $this->usersModel->findUserByID($_POST['id']);
      // die(print_r($row));

      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      $data = [
        'title' => 'edit',
        'row' => $row,
        'id' => trim($_POST['id']),


      ];
      // die(print_r($data['row']->name));

      // die($row->name);
      $this->view('admin/pages/user/edit_user', $data);
    }
  }
  // public function editUser()
  // {
  //   $data = [
  //     'title' => 'Edit User',
  //   ];
  //   $this->view('admin/pages/user/edit_user', $data);
  // }


  public function userLogStatus()
  {
    if ($_SESSION['user_id']) {
      return true;
    } else {
      return false;
    }
  }
  public function viewProductPage()
  {
    $row = $this->productsModel->productList();
    $data = [
      'title' => 'Products',
      'counter' => 0,
      'products' => $row
    ];
    $this->view('admin/pages/product/index', $data);
  }
  public function addProductPage()
  {

    $pid = 'FM' . rand(100000, 1000000);
    $data = [
      'title' => 'Add Product',
      'pid' => $pid,
    ];
    $this->view('admin/pages/product/add_product', $data);
  }
  //admin routes....



}
