<?php defined('BASEPATH') or exit('No direct script access allowed');
	
/**
 * 
 */
class model_auth extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function logged_in($username)		
	{
		return $this->db
		    ->where('username', $username)
            ->limit(1)
            ->get('user');
	}
}