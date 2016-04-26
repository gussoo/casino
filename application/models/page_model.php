<?php

class Page_model extends CI_Model
{

  function is_this_user_active()
  {
     $total = $this->db->query("SELECT * FROM user WHERE id = '".$_SESSION['id']."'");
     return $total->result();
  }
  
  function check_duplicate_tel($tel)
  {
  	 $total = $this->db->query("SELECT * FROM casino_client WHERE tel LIKE '".$tel."%'");
     return $total->result();
  }
  
  function set_client($nom, $cognom, $tel, $tel2, $dire, $cp, $email, $miscellaneous, $data, $is_forro)
  {
  	 $buscar = $this->db->query("SELECT * FROM casino_client WHERE tel = '".$tel."'");
	 if($buscar->num_rows() > 0)
	 {
	 	$this->db->query("UPDATE casino_client SET 
  	 					nome = '".$nom."', 
  	 					cognome = '".$cognom."', 
  	 					teldos = '".$tel2."', 
  	 					indirizzo = '".$dire."', 
  	 					email = '".$email."', 
  	 					cp = '".$cp."', 
  	 					observacio = '".$miscellaneous."',  
  	 					is_forro = '".$is_forro."' 
  	 					WHERE tel = '".$tel."' ");
	 }else{
  	 	$this->db->query("INSERT INTO casino_client (nome, cognome, tel, teldos, indirizzo, email, cp, observacio, fecha, is_forro) VALUES ('".$nom."', '".$cognom."', '".$tel."', '".$tel2."', '".$dire."', '".$email."', '".$cp."', '".$miscellaneous."', '".$data."', '".$is_forro."') ");
     	//$ejecuta->result();
	 }
  }
  
  function update_client($nom, $cognom, $tel, $tel2, $dire, $cp, $email, $miscellaneous, $is_forro)
  {
  	 $this->db->query("UPDATE casino_client SET 
  	 					nome = '".$nom."', 
  	 					cognome = '".$cognom."', 
  	 					teldos = '".$tel2."', 
  	 					indirizzo = '".$dire."', 
  	 					email = '".$email."', 
  	 					cp = '".$cp."', 
  	 					observacio = '".$miscellaneous."',  
  	 					is_forro = '".$is_forro."' 
  	 					WHERE tel = '".$tel."' ");
     //$ejecuta->result();
  }
  
  function set_pedido($totale, $observacio, $id_client, $data, $extra_plata, $extra_desc, $buscan, $motero, $cuando_llevar, $paga)
  {
  	 $this->db->query("INSERT INTO casino_order (id, prezzo, observacio, id_client, fecha, ext_plata, ext_desc, buscan, motero, llevar, paga) VALUES ('', '".$totale."', '".$observacio."', '".$id_client."', '".$data."', '".$extra_plata."', '".$extra_desc."', '".$buscan."', '".$motero."', '".$cuando_llevar."', '".$paga."') ");
     //$ejecuta->result();
	 return mysql_insert_id();
  }
  
  function set_ped_prod($id_ped, $id_prod, $qty)
  {
  	 $this->db->query("INSERT INTO casino_ord_prod (id, order_id, prod_id, qty) VALUES ('', '".$id_ped."', '".$id_prod."', '".$qty."') ");
     //$ejecuta->result();
  }
  
  function set_casino($name, $location, $opent)
  {
  	 $this->db->query("INSERT INTO casino_producto (id, nome, location, openingt) VALUES ('', '".$name."', '".$location."', '".$opent."') ");
  }
  
  function get_casinos()
  {
  	 $total = $this->db->query("SELECT * FROM casino_producto WHERE is_activo = 0 ");
     return $total->result_array();
  }
  
  function get_this_casino($id)
  {
  	 $total = $this->db->query("SELECT * FROM casino_producto WHERE id = '".$id."' ");
     return $total->result_array();
  }
  
  function del_casino($id_prod)
  {
  	 $total = $this->db->query("DELETE FROM casino_producto 
  	 							WHERE id = '".$id_prod."' ");
  }
  
  function edit_casino($name, $location, $opent, $id)
  {
  	 $total = $this->db->query("UPDATE casino_producto SET
  	 							nome = '".$name."',
  	 							location = '".$location."',
  	 							openingt = '".$opent."'  	 							
  	 							WHERE id = '".$id."' ");
  }
  
  function get_promos()
  {
  	 $total = $this->db->query("SELECT * FROM casino_producto WHERE is_promo = 1 AND is_activo = 0 ");
     return $total->result_array();
  }
  
  function get_clientes()
  {
  	 $total = $this->db->query("SELECT * FROM casino_client");
     return $total->result_array();
  }
  
  function get_pedidos()
  {
  	 $dia = date('y-m-d', time() - 14400); //cambiar en verano-invierno horas*60*60 18000
  	 $total = $this->db->query("SELECT o.*, c.nome, c.cognome, c.indirizzo, c.cp, c.is_forro, c.tel FROM casino_order o, casino_client c WHERE c.tel = o.id_client AND o.fecha > '".$dia."'");
     return $total->result_array();
  }

  function get_pedidos_num()
  {
  	 $dia = date('y-m-d', time() - 14400); //cambiar en verano-invierno horas*60*60 18000
  	 $total = $this->db->query("SELECT o.*, c.nome, c.cognome, c.indirizzo, c.cp, c.is_forro, c.tel FROM casino_order o, casino_client c WHERE c.tel = o.id_client AND o.fecha > '".$dia."'");
     return $total->num_rows();
  }
  
  function get_users($user, $pass)
  {
     $total = $this->db->query("SELECT * FROM casino_user WHERE usuari = '".$user."' AND pass = '".$pass."'");
     return $total->result();
  }
  
  function cambiar_order($id, $observacio, $newstat)
  {
  	 $total = $this->db->query("UPDATE casino_order SET
  	 							observacio = '".$observacio."',
  	 							estat = '".$newstat."'
  	 							WHERE id = '".$id."' ");
  }
  
  function set_forro($tel, $forro)
  {
  	 $this->db->query("UPDATE casino_client SET 
  	 					is_forro = '".$forro."' 
  	 					WHERE tel = '".$tel."' ");
  }
}