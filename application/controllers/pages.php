<?php 
session_start();
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

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
	{$this->load->database();
	    $this->load->helper('url');
		$this->load->model('page_model'); 
		/******************* Check Usuari Temporal ***********************/
		$pasopa = 0;
		if($this->input->post('usuari') != ''){
			$usuari = $this->page_model->get_users($this->input->post('usuari'), md5($this->input->post('pass')));
			if(isset($usuari[0])){
				$_SESSION['usuari_sl'] = 'AAAAB3NzaC1yc2EAAAABJQAAAQEAhXE7fn4YC18mtBSulxK3BmU1ifK3xW4wRw9E';	
				$_SESSION['level'] = $usuari[0]->nivel;
			}else{
				echo '<style>#incorrect{display: block !important;}</style>';
			}
		}
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
		//$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('home');
		$this->load->view('footer');
		}
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */