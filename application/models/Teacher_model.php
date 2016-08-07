<?php
class Teacher_model extends CI_Model {

    public function __construct()
    {
            parent::__construct();
            $this->load->database(); 
    }



    public function searchMentor($preference = array())
    {
        if(count($preference) != 0)
        {
/*            $query = $this->db->get_where('users', array('role_id' => 2));
            return $query->row_array();*/

            $this->db->select('*');
            $this->db->from('users');
            $this->db->join('preferences', 'preference.user_id =users.id');

            foreach ($preference as $key => $value) {
                # code...
                if($key != 'price')
                {
                    $this->db->join($key, 'preference.user_id = '.$key.'id');    
                }
                
            }
            if(isset($preference['language']))
            {
                $this->db->where('language.name', $preference['language']);
            }
            if(isset($preference['subjects']))
            {
                $this->db->where('subjects.name', $preference['subjects']);   
            }
            if(isset($preference['price']))
            {
                $this->db->where('preference.price <', $preference['price']);      
            }

            $this->db->where('role_id',2);
            $query = $this->db->get();
            return $query;
        }
        else
        {
            return false;
        }
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