<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function index()
	{
		//$this->load->view('home');

		$headerdata = array(
			'settings' => $this->model_settings->getSettings()
		);

		$data = array(
		    'page' => 'contact',
		    'sociallinks' => $this->model_social->getSocialLinks()
		);
		$this->load->view('includes/header1', $headerdata);
		$this->load->view('contact' , $data);
		$this->load->view('includes/footer1');
	}
}