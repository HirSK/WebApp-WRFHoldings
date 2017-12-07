
<?php

class UserCtrl extends CI_Controller
{
  public function index()
  {
    $this->load->model('userModel');
    $data["userArray"] = $this->userModel->return_data();
    $this->load->view("userView",$data);
  }
}

?>