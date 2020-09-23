<?php
	class Model_settings extends CI_Model {
		function __construct() {
			parent::__construct(); // call to model constructor
		}

		function getSettings() {
			$query = $this->db->get('settings');

			if ($query->num_rows() > 0) { 	// one or more results found
				return $query->result(); 	// returns array of objects
			} else {
				return NULL;				// no result found
			} 
		}

		
		
	}
?>