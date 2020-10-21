<?php
	class Model_testimonials extends CI_Model {
		function __construct() {
			parent::__construct(); // call to model constructor
		}

		function getTestimonials() {
			$this->db->select('*');
			$this->db->order_by('id', 'DESC');  
			$this->db->from('testimonials');
			$this->db->limit('5');
			$this->db->where(array('status' => 1));

			$query = $this->db->get();

			if ($query->num_rows() > 0) { 	// one or more results found
				return $query->result(); 	// returns array of objects
			} else {
				return NULL;				// no result found
			} 
		}
	}
?>