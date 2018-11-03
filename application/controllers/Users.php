<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Users_model');
    }

    public function signup() {
		$this->form_validation->set_rules('username', 'Username','trim|required');
		$this->form_validation->set_rules('email', 'Email','trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password','trim|required');

		if ($this->form_validation->run() == TRUE) {
			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$password = md5($this->input->post('password'));
			$this->Users_model->sign_up($username, $email, $password);
			$this->session->set_flashdata('signup_msg', 'Sign up successful! Login to your account');
			redirect(site_url('home/login'));
		}

		else {
			redirect(site_url('home/login'));
			$this->session->set_flashdata('signup_msg', 'Sign up unsuccessful! Try again');
		}
	}

    public function login() {
        $this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');

		if ($this->form_validation->run() == TRUE) {

		    $user = array(
		        'username'=>$this->input->post('username'),
			    'password'=>md5($this->input->post('password'))
		    );

		    $data = $this->Users_model->login_user($user['username'], $user['password']);
		    if ($data) {
			    $this->session->set_userdata('id', $data['id']);
			    $this->session->set_userdata('username', $data['username']);
			    $this->session->set_userdata('mail', $data['mail']);
			    $this->session->set_userdata('role', $data['role']);
			    $this->session->set_userdata('logged_in', TRUE);

			    $this->session->set_flashdata('msg_success','Login Successful!');

			    redirect(site_url('home/'));
		        }

		    else {
			    $this->session->set_flashdata('msg_error', 'Login unsuccessful. Try again...');
			    redirect(site_url('home/login'));
		    }
		} else {
			redirect(site_url('Home/login'));
		}
    }

    public function logout() {
		$this->session->sess_destroy();
		redirect('home');
	}

}
