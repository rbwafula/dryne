<?php
	class Model_social extends CI_Model {
		function __construct() {
			parent::__construct(); // call to model constructor
		}

		function getSocialLinks() {
			/*$this->db->select($par);
			$this->db->where('id', $id);*/
			$query = $this->db->get('social');

			if ($query->num_rows() > 0) { 	// one or more results found
				return $query->result(); 	// returns array of objects
			} else {
				return NULL;				// no result found
			} 
		}

		
		
	}
?>