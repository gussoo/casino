<?php 
session_start();
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class New_casino extends CI_Controller {

	public function index()
	{
		$this->load->database();
	    $this->load->helper('url');
		$this->load->model('page_model'); 
		/******************* Check Usuari Temporal ***********************/
		$pasopa = 0;
					
		if(isset($_SESSION['usuari_sl']) && $_SESSION['level'] == 1)
		{
			if($_SESSION['usuari_sl'] != 'AAAAB3NzaC1yc2EAAAABJQAAAQEAhXE7fn4YC18mtBSulxK3BmU1ifK3xW4wRw9E')
			{

				$this->load->helper('url');
				$this->load->view('header');
				$this->load->view('login');
				$this->load->view('footer');
				$pasopa++;
			}
		}else{

			$this->load->helper('url');
			$this->load->view('header');
			$this->load->view('login');
			$this->load->view('footer');
			$pasopa++;
		}
		if($pasopa == 0)
		{

		/*************************************************************/
		if($this->input->post('nombre') != "")
		{
			$name = $this->input->post('nombre');
			$location = $this->input->post('location');
			$opent = $this->input->post('opent');
			$this->page_model->set_casino($name, $location, $opent);
		}
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('new_casino');
		$this->load->view('footer');
		}
	}
}
