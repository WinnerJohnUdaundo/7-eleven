<?php
class Sales extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Staff_model');
        $this->load->library('session');
    }
    public function index(){
        $user = $this->session->userdata();
        if($user){
            $this->load->view('Sales/sale');
        }else{
            redirect('Login');
        }
    }
}
?>