<?php

<<<<<<< HEAD
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
=======
>>>>>>> f5750a7661d322c717ee112fd971d113d8957f02
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
	
	class Compania_model extends CI_Model{
		
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
<<<<<<< HEAD
=======
		$this->load->model('Compania_model');
>>>>>>> f5750a7661d322c717ee112fd971d113d8957f02
	}
	function crearCurso($data)
	{
		$this->db->insert()
	}
		
		
		
		
		
<<<<<<< HEAD
>>>>>>> f67341711353c4d8b928acf3e67dfde8e722579e
=======
>>>>>>> f5750a7661d322c717ee112fd971d113d8957f02
		
		
	}