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
}
?>