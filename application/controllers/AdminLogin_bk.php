<?php 
class AdminLogin extends CI_Controller{
    public function __construct()
    {
    parent::__construct();
    }
Public function index(){
    $this-> load->view('admin_login');
  //  $this-> load->view('admin/include/footer.php');
}
// public function login(){
//   $data = $this ->input->post();
//   $resp = $this->CM->select_data('lms_admin','*',$data);
//   if(count($resp)>0){
// echo json_encode(array)
//   }

}

// }


?>