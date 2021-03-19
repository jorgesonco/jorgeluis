<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Area extends CI_Controller {

    public function __construct()
	{
		parent::__construct();

		$this->load->model('area_model');
	}
    public function index()
    {
        $data['area'] = $this->area_model->get_area();
        $data['vista'] = 'area/tabla_area';
		$this->load->view('mi_principal/base_principal', $data);
    }

    public function guardar()
	{
		$dato = array(
			'area' => $this->input->post('area')
		);
        $this->area_model->insertar($dato);
        redirect(base_url() . 'area');
	}

    public function editar($id)
	{
		$data['area'] = $this->area_model->editar($id);
		$data['vista'] = 'area/editar_area';
		$this->load->view('mi_principal/base_principal', $data);
		
	}

    public function actualizar()
	{
		$id = $this->input->post('id_area');
		$dato = array(
			'area' => $this->input->post('area')
		);
            $this->area_model->modificar($id,$dato);
			redirect(base_url() . 'area');
	}
    public function elimina($id)
	{
		$this->area_model->eliminar($id);
		redirect(base_url() . 'area');
	}


}
