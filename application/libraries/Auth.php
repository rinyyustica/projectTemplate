<?php defined('BASEPATH') or exit('No direct script access allowed');
class Auth 
{
  public $CI;
  public function __construct()
  {
    $this->CI = &get_instance();
    $this->CI->load->model('model_auth');
    $this->CI->load->library('session');
  }
  /**
	* Fungsi untuk mengecek apakah login berhasil atau tidak
	* @access public
	* @return bool
	*/
	public function logged_in($username, $password)
	{
		$query = $this->CI->model_auth->logged_in($username);
		if ($query->num_rows() === 1) {
			$data = $query->row();
			if ($username == $data->username && password_verify($password, $data->password)) {
				$session_data = [];
				$session_data['logged_in'] = true;
				$this->CI->session->set_userdata($session_data);
				return true;
			}
			return false;
		}
		return false;
	}
	/**
	* fungsi untuk mengecek status login
	* @access public
	* @return bool
	*/
	public function is_logged_in()
	{
		if ($this->CI->session->userdata('logged_in') !== NULL && $this->CI->session->userdata('logged_in')) {
			return true;
		}
		return false;
	}
	/**
	* fungsi untuk membatasi akses jika status login tidak aktif
	* @access public
	* @return void
	*/
	public function restrict()
	{
		if (!$this->is_logged_in()) {
			redirect('index.php/login');
		}
	}
}