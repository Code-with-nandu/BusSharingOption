<?php
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('adminsession')){
            redirect(base_url('adminlogin'));
            return false;
        }
    }
    public function index()
    {
        $this->load->view('admin/include/header.php');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/include/footer.php');
    }
    public function locations()
    {
        $this->load->view('admin/include/header.php');
        $this->load->view('admin/locations');
        $this->load->view('admin/include/footer.php');
    }
}
