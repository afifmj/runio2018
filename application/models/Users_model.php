<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}

    // signup form
    public function sign_up($username, $email, $password){
		$query = $this->db->query("INSERT INTO users (username, email, password, role) values ('$username', '$email', '$password', 0) ");
	}

	public function login_user($uname, $psw) {
		$username = $uname;
		$password = $psw  ;
		$this->db->select('*');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('users');
		if ($query) {
			return $query->row_array();
		}
		else {
			return FALSE;
		}
	}

    public function get_all_users() {
        $query = $this->db->query('SELECT * FROM users WHERE role=0 ORDER BY username DESC;');
		return $query->result_array();
    }

}

?>
