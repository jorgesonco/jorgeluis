<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasantes_controller extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		
		$this->load->model('pasantes_model');
		
	}

    public function index()
    {
        $this->load->view('mi_principal/base_principal');
    }

    public function insertar()
    {
        if($_POST){
            $this->pasantes_model->inserta($_POST);
        }
        $this->load->view('mi_principal/base_principal');
    }

}

/* End of file Controllername.php */
