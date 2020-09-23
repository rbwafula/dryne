<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Development extends CI_Controller {
	public function index()
	{
		//$data['sociallinks'] = $this->model_social->getSocialLinks();

		$headerdata = array(
			'settings' => $this->model_settings->getSettings()
		);

		$data = array(
		    'title' => 'My Title',
		    'sociallinks' => $this->model_social->getSocialLinks()
		);
		$this->load->view('includes/header1', $headerdata);
		$this->load->view('development' , $data);
		$this->load->view('includes/footer1');
	}
}