<?php 
session_start();
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
		NO FUNCA DE MOMENTO LO HACE DIRECTO
	 */
	public function index()
	{
		echo 'login';
		/*$this->load->database();
	    $this->load->helper('url');
		$this->load->model('page_model');*/
		
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}
}
		