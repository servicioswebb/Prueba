<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');

	class Compania extends CI_Model{  //Creando el controlador para la clase compañia
		
		public function __construct()
		{
			
			parent::__construct();
			$this->load->helper('form');
			$this->load->model('Compania_model');
			
		public function recibirDatos()
		{
				$data = array(
				
				
				)
		}
				
		
		}	
		public function index ()
		{
			//hacer la maquetacion de la pagina aqui video 6
			//buscar una plantilla para arreglar la pagina
			
		}
		
		public function crear ()
		{
			//hacer la maquetacion de la pagina aqui video 6
			//buscar una plantilla para arreglar la pagina
			
		}
		
		public function borrar ()
		{
			//hacer la maquetacion de la pagina aqui video 6
			//buscar una plantilla para arreglar la pagina
			
		}
		
		public function modificar()
		{
			//hacer la maquetacion de la pagina aqui video 6
			//buscar una plantilla para arreglar la pagina
			
		}
		
		public function listar ()
		{
			//hacer la maquetacion de la pagina aqui video 6
			//buscar una plantilla para arreglar la pagina
			
		}
		
	}