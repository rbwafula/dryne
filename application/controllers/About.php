<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	function __construct() {
		parent::__construct(); // call to parent constructor
		
		$this->load->model('model_testimonials');
	}

	public function index() {
		$headerdata = array(
			'settings' => $this->model_settings->getSettings()
		);

		$data = array(
		    'page' => 'about'
		    , 'sociallinks' => $this->model_social->getSocialLinks()
		    , 'testimonials' => $this->model_testimonials->getTestimonials()
		);
		$this->load->view('includes/header1', $headerdata);
		$this->load->view('about' , $data);
		$this->load->view('includes/footer1');
	}
}