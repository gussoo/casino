<?php
// SQL queries

class Page_model extends CI_Model
{
 
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
    
  function get_users($user, $pass)
  {
     $total = $this->db->query("SELECT * FROM casino_user WHERE usuari = '".$user."' AND pass = '".$pass."'");
     return $total->result();
  }
    
}