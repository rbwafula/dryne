<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {
	public function index()
	{
		$headerdata = array(
			'settings' => $this->model_settings->getSettings()
		);

		$data = array(
		    'page' => 'services',
		    'sociallinks' => $this->model_social->getSocialLinks()
		);
		$this->load->view('includes/header1', $headerdata);
		$this->load->view('services' , $data);
		$this->load->view('includes/footer1');
	}
}