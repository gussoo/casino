<?php

class Check_user extends CI_Model
{

	function isLogined()
	{
		if(isset($_SESSION['user']))
		{
			$loginado = 'si';
		}else{
			$loginado = 'no';			
		}
		return $loginado;
	}

}