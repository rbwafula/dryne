<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	public function index()
	{
		$headerdata = array(
			'settings' => $this->model_settings->getSettings()
		);

		$data = array(
		    'page' => 'about',
		    'sociallinks' => $this->model_social->getSocialLinks()
		);
		$this->load->view('includes/header1', $headerdata);
		$this->load->view('about' , $data);
		$this->load->view('includes/footer1');
	}
}