<?php 
class Home extends CI_Controller{
    public function __construct()
    {
    parent::__construct();
    }
Public function index(){
    $this-> load->view('home');
}

}


?>