<?php

<<<<<<< HEAD

	class Compania extends CI_Model{  //Creando el controlador para la clase compañia
		
		public function __construct()
		{
			$this->load->database();
						
		}	
		public function index ()
		{
			
		}
=======
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
		
		
		
		
		
>>>>>>> f67341711353c4d8b928acf3e67dfde8e722579e
		
		
	}