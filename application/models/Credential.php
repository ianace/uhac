<?php
class Credential extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->library('bcrypt');
	}

	public function auth($username, $password){
		$hash = $this->bcrypt->hash_password($password);
		$this->db->select('id', 'username', 'password');
		$this->db->from('credentials');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$this->db->limit(1);

		$query = $this->db->get();
		return $query->num_rows() == 1 ? $query->result() : FALSE;
	}

	public function user_info($username){		
		$query = "SELECT credentials.id, credentials.username, credentials.password, users.name as fullname, roles.name as role FROM credentials";
		$query .= " LEFT JOIN users on credentials.user_id = users.id LEFT JOIN roles on users.role_id = roles.id WHERE username = ?";
		return $query = $this->db->query($query, array($username))->result();
	}
}
?>