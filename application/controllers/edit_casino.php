<?php 
session_start();
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Edit_casino extends CI_Controller {

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
			$id = $this->input->post('id');
			$this->page_model->edit_casino($name, $location, $opent, $id);
		}
		
		$id_rcv = $this->uri->segment(2);
		$data['casino'] = $this->page_model->get_this_casino($id_rcv);
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('edit_casino', $data);
		$this->load->view('footer');
		}
	}
}
