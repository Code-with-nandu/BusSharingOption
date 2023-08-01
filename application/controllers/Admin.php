<?php 
class Admin extends CI_Controller{
    public function __construct()
    {
    parent::__construct();
    }
Public function index(){
    $this-> load->view('admin/include/header.php');
    $this-> load->view('admin/dashboard');
    $this-> load->view('admin/include/footer.php');
}
}



?>