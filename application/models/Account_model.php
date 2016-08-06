<?php
class Account_model extends CI_Model {

    public function __construct()
    {
            parent::__construct();
            $this->load->database(); 
    }

    public function get_password($id = false)
    {
    	// $query = $this->db->
    	 if($id != false ) {
		    $query = $this->db->get_where('credentials', array('id' => $id));
		   
		    return $query->row_array();
		  }
    }
    public function udpate_password($id = false,$password = false)
    {
    	// $query = $this->db->
		if($id != false ) {
			$this->db->update('credentials', $this, array('id' => $id, 'password' => $password));
		}
    }
    public function get_last_ten_entries()
    {
            $query = $this->db->get('entries', 10);
            return $query->result();
    }

    public function insert_entry()
    {
            $this->title    = $_POST['title']; // please read the below note
            $this->content  = $_POST['content'];
            $this->date     = time();

            $this->db->insert('entries', $this);
    }

    public function update_entry()
    {
            $this->title    = $_POST['title'];
            $this->content  = $_POST['content'];
            $this->date     = time();

            $this->db->update('entries', $this, array('id' => $_POST['id']));
    }
    public function get_role_type($id = false)
    {
        if($id != false ) {    
            $query = $this->db->get_where('users', array('id' => $id));
           
            return $query->row_array()['role_id'];
        }
    }

}

?>