<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// Login Controller
class Login extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            $this->load->helper('url');
            // $this->load->helper('url_helper');
            $this->load->model('login_model');
    }

    public function index()
	{
        $this->load->view('Login_view.php');        
    }

    public function doLogin()
    {
        $username = $this->db->escape_like_str($this->input->post("username"));
		$password = $this->db->escape_like_str($this->input->post("password"));

        $LoginYN = $this->login_model->doLogin($username, md5($password));

        if ($LoginYN > 0)
            // SET SESSION VARIABLES
            redirect('dashboard');
        else
            redirect('/');
    }

    public function doLogout()
  	{
  		$this->login_model->doLogout();
  	}
}
