<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lectura extends CI_Controller {

	public function index()
	{
		$this->load->model("luzbd_model");
		$filas = $this->luzbd_model->cuentas();
		$datos["filas"]=$filas;
		$this->load->view('view_lectura', $datos);
	}

	public function indexdos()
	{
		$this->load->helper('url');

		$dato["nro_cuenta"]=$_GET['nro_cuenta'];
		$this->load->model("luzbd_model");
		$this->luzbd_model->eliminar($dato["nro_cuenta"]);
		redirect("Lectura");
		
	}


}
