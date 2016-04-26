<?php 
session_start();
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Casinos extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->database();
	    $this->load->helper('url');
		$this->load->model('page_model'); 
		/******************* Check Usuari Temporal ***********************/
		$pasopa = 0;
			
		if(isset($_SESSION['usuari_sl']))
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
		
		if($this->input->post('xprod') != "") $this->page_model->del_casino($this->input->post('ciaoprod'));
		
		$data['casinos'] = $this->page_model->get_casinos();
		
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('casinos', $data);
		$this->load->view('footer');
		}
	}
}
		