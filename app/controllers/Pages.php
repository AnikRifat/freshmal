<?php
class Pages extends Controller
{
  public function __construct()
  {
  }
  //default routes....

  public function index()
  {
    $data = [
      'title' => 'Home',
      'description' => 'Simple social network built on the TraversyMVC PHP framework'
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
    $this->view('admin/pages/user/view_user', $data);
  }
  public function editUser()
  {
    $data = [
      'title' => 'Edit User',
    ];
    $this->view('admin/pages/user/edit_user', $data);
  }
  //admin routes....

}
