<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pasantes_model extends CI_Model {

   public function insertar($datos)
    {
       return $this->db->insert('pasante', $datos);   
    }

   public function listar_ta()
   {
      return $this->db->get('view_pasante')->result();
      
   }
   ///
   public function listar_area()
   {
      return $this->db->get('area')->result();
   }
   public function listar_gestion()
   {
      return $this->db->get('gestion')->result();
   }
   public function listar_turno()
   {
      return $this->db->get('turno')->result();
   }
   /////
   public function eliminar($id)
   {
      $this->db->where('id_pasante', $id);
      return $this->db->delete('pasante');
   }
   public function editar($id)
   {
      $this->db->where('id_pasante', $id);
      return $this->db->get('pasante')->row();
      
      
   }
   public function modificar($id,$datos)
    {
      $this->db->where('id_pasante', $id);
       return $this->db->update('pasante', $datos);   

       
    }

}

