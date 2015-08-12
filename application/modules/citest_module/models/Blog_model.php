<?php

class Blog_model extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
				$this->load->database();
        }

        public function get_last_ten_entries()
        {
                $query = $this->db->get('tblcategory', 10);
                return $query->result();
        }
		
        public function get_last_ten_entries_array()
        {
                $query = $this->db->get('tblcategory', 10);
                return $query->result_array();
        }		

        public function insert_entry()
        {
                $this->cat_id    = 67; // please read the below note
                $this->cat_name  = 'Hi Donald test';
                $this->order_id     = 40;
				$this->date_create     = date('Y-m-d H:i:s');
				$this->date_upd     = date('Y-m-d H:i:s');
                return $this->db->insert('tblcategory', $this);
        }

        public function update_entry()
        {
                $this->cat_id    = 68; // please read the below note
                $this->cat_name  = 'Hi Donald test, update!';
                $this->order_id     = 11;
                return $this->db->update('tblcategory', $this, array('id' => 64));
        }
		

	

}




















