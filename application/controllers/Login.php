<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function login()
    {
        if(!empty($_POST)){
            $user = $this->data->getdata('users',$_POST);
            if(!empty($user)){
                $this->session->set_userdata('login',$user);
                redirect('Admin/index');
            }else{
                $this->session->set_flashdata('success','Incorrect Email/Password');
                redirect('Login');
            }
        }else{
            redirect('Login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('login');
        redirect('Login');
    }

}






