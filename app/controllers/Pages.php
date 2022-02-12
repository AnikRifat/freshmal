<?php
class Pages extends Controller
{
  public function __construct()
  {
  }

  public function index()
  {
    $data = [
      'title' => 'Home',
      'description' => 'Simple social network built on the TraversyMVC PHP framework'
    ];

    $this->view('front/pages/index', $data);
  }
  public function admin()
  {
    $data = [
      'title' => 'Dashboard',
    ];

    $this->view('admin/pages/index', $data);
  }
  public function about()
  {
    $data = [
      'title' => 'About Us',
      'description' => 'App to share posts with other users'
    ];

    $this->view('front/pages/about', $data);
  }
}
