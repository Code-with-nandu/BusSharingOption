<?php
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('adminsession')) {
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
        //$this->db->order_by("id","desc");
        $data['locations'] = $this->CM->select_data("lms_location", "*");
        //$this->db->order_by("id","desc");
        // echo "<pre>"; print_r($data['locations']);
        // echo "<pre>"; print_r($_REQUEST); 
        $this->load->view('admin/include/header.php');
        $this->load->view('admin/locations', $data);
        $this->load->view('admin/include/footer.php');
    }
    public function delete_location($id)
    {
        $this->CM->delete_data("lms_location",array("id"=>$id));
        redirect(base_url("admin/locations"));
      //  echo $id;
    }
    public function update_location($id)
    {
        $data['location']= $this->CM->select_data("lms_location","*",array("id"=>$id))[0];
       //  echo "<pre>"; print_r($data['location']);
         $this->load->view('admin/include/header.php');
        $this->load->view('admin/edit_location', $data);
        $this->load->view('admin/include/footer.php');
    }
}
