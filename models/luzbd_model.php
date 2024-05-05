<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class luzbd_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function cuentas()
	{
		$this->load->database();
		$query=$this->db->query("SELECT * FROM cuentas WHERE estado_cuenta LIKE 'DISPONIBLE'");
		return $query->result();
	}

	public function eliminar($id)
	{
		$this->load->database();
		$query=$this->db->query("UPDATE cuentas SET estado_cuenta='CONGELADA' WHERE nro_cuenta='$id';");
		$query=$this->db->query("SELECT * FROM cuentas WHERE estado_cuenta LIKE 'DISPONIBLE'");
		return $query->result();
	}

}
