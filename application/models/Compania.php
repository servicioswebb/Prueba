<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
	
	class Compania_model extends CI_Model{
		
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	function crearCurso($data)
	{
		$this->db->insert()
	}
		
		
		
		
		
		
		
	}