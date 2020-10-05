<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Custom404 extends CI_Controller {
	public function index()
	{
		$headerdata = array(
			'settings' => $this->model_settings->getSettings()
		);

		$data = array(
		    'page' => 'services',
		    'sociallinks' => $this->model_social->getSocialLinks()
		);
		$this->output->set_status_header('404');
		$this->load->view('includes/header1', $headerdata);
		$this->load->view('errors/custom404' , $data);
		$this->load->view('includes/footer1');
	}
}