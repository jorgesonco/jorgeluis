<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pasantes extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();

		$this->load->model('pasantes_model');
	}



	public function crear()
	{

		$data['vista'] = 'pasantes/form_registro';
		$this->load->view('mi_principal/base_principal', $data);
		
	}
	public function index()
	{

		$data['vista'] = 'pasantes/mi_tabla';
		$this->load->view('mi_principal/base_principal', $data);
	}
	public function registro()
	{
		$data['area'] = $this->pasantes_model->listar_area();
		$data['turno'] = $this->pasantes_model->listar_turno();
		$data['gestion'] = $this->pasantes_model->listar_gestion();
		$data['pasantes'] = $this->pasantes_model->listar_ta();
		$data['vista'] = 'pasantes/reg_pasante';
		$this->load->view('mi_principal/base_principal', $data);
		
	}
	public function editar($id)
	{
		$data['area'] = $this->pasantes_model->listar_area();
		$data['turno'] = $this->pasantes_model->listar_turno();
		$data['gestion'] = $this->pasantes_model->listar_gestion();
		$data['pasante'] = $this->pasantes_model->editar($id);
		$data['vista'] = 'pasantes/form_editar';
		$this->load->view('mi_principal/base_principal', $data);
		
	}
	public function eliminar()
	{
		$data['vista'] = 'pasantes/eliminar_reg';
		$this->load->view('mi_principal/base_principal', $data);
		
	}

	public function guardar()
	{
		$dato = array(
			'cedula' => $this->input->post('cedula'),
			'nombre' => $this->input->post('nombre'),
			'paterno' => $this->input->post('paterno'),
			'materno' => $this->input->post('materno'),
			'ru' => $this->input->post('ru'),
			'celular' => $this->input->post('celular'),
			'id_gestion_fk' => $this->input->post('gestion'),
			'id_area_fk' => $this->input->post('area'),
			'id_turno_fk' => $this->input->post('turno')
		);

		if ($this->pasantes_model->insertar($dato)) {
			redirect(base_url() . 'pasantes/registro');
		} else {
			echo "no insertado";
		}
	}

	public function elimina($id)
	{
		$this->pasantes_model->eliminar($id);
		redirect(base_url() . 'pasantes/registro');
	}

	public function actualizar()
	{
		$id = $this->input->post('id_pasante');
		$dato = array(
			'cedula' => $this->input->post('cedula'),
			'nombre' => $this->input->post('nombre'),
			'paterno' => $this->input->post('paterno'),
			'materno' => $this->input->post('materno'),
			'ru' => $this->input->post('ru'),
			'celular' => $this->input->post('celular'),
			'id_gestion_fk' => $this->input->post('gestion'),
			'id_area_fk' => $this->input->post('area'),
			'id_turno_fk' => $this->input->post('turno')
		);

		if ($this->pasantes_model->modificar($id,$dato)) {
			redirect(base_url() . 'pasantes/registro');
		} else {
			echo "no insertado";
		}
	}
}
