<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Csr extends CI_Controller {
	public function index()
	{
		$headerdata = array(
			'settings' => $this->model_settings->getSettings()
		);

		$data = array(
		    'page' => 'csr',
		    'sociallinks' => $this->model_social->getSocialLinks()
		);
		$this->load->view('includes/header1', $headerdata);
		$this->load->view('csr' , $data);
		$this->load->view('includes/footer1');
	}
}