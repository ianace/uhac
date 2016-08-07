<?php
class User extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function add($data){
		$this->db->insert('users', $data);
		return $this->db->insert_id();
	}

	public function getUserInfo($id = 0){
		$query = "SELECT credentials.id, credentials.email, credentials.username, credentials.password, users.name as fullname, roles.name as role FROM credentials";
		$query .= " LEFT JOIN users on credentials.user_id = users.id LEFT JOIN roles on users.role_id = roles.id WHERE credentials.id = ?";
		$result = $this->db->query($query, array($id))->result();
		return get_object_vars($result[0]);
	}
}
?>