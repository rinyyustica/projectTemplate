<?php defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{
  public function __construct() 
  {
    parent::__construct();
    $this->load->library('auth');
    if ($this->auth->is_logged_in()) {
      redirect(base_url('index.php/home'));
    }
  }
  public function index()
  {
    $data['session'] = $this->session->userdata('logged_in');
    $data['type'] = 'success';
    $this->load->view('auth/login', $data);
  }
  public function process()
  {
    $data = [];
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      if ($this->auth->logged_in($username, $password)) {
        $data['type'] = 'success';
        redirect(base_url('index.php/home'));
      }
      else {
        $data['type'] = "error";
        $data['message'] = 'Username and/or password are not valid';
      }

    $this->load->view('auth/login', $data);
  }
} 

