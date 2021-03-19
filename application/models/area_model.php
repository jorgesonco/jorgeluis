<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Area_model extends CI_Model {

    public function insertar($datos)
    {
       return $this->db->insert('area', $datos);   
    }
    public function get_area()
    {
        return $this->db->get('area')->result();
        
    }

    public function editar($id)
   {
      $this->db->where('id_area', $id);
      return $this->db->get('area')->row();
   }

    public function modificar($id,$datos)
    {
      $this->db->where('id_area', $id);
       return $this->db->update('area', $datos);   
    }

    public function eliminar($id)
   {
      $this->db->where('id_area', $id);
      return $this->db->delete('area');
   }

}

