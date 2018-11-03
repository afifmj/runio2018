<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index() {
        $this->load->view('home');
    }

    public function login() {
        $this->load->view('login');
    }

    public function volunteers() {
        $data['all_users'] = $this->Users_model->get_all_users();

        $this->load->view('volunteers', $data);
    }

}
