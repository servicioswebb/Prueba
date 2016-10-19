<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Compania_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();

    }
	
	public function getCompania()
	{
		return $this->db->get('compania');
		
	}
    public function crearCompania($data)
    {
        $this->db->insert('compania',array('Nombre compañia'=>$data['nombre'],'actividad compañia'=>$data['actividad']));
    }

	public function getCompaniaById($id='')
	{
		$result = $this->db->query("SELECT * FROM compania WHERE idCompa='" .$id. "' LIMIT 1");
		return $result->row();
	}
}
