

<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');

}
class CompaniaController extends CI_Controller
{
    //Creando el controlador para la clase compañia

    public function __construct()
    {

        parent::__construct();
        $this->load->helper('mihelpe');
        $this->load->helper('form');
        $this->load->helper('url');
        //$this->load->model('Compania');
    }

    public function index()
    {

        /* $this->load->library('menu', array('Inicio', 'Compania'));
        $data['mi_menu'] = $this->menu->construirMenu();
        $this->load->view('compania/bienvenido', $data);
         */
        $this->load->view('layouts/head');
        $this->load->view('layouts/header');
        $this->load->view('layouts/main');

		$this->load->model('Compania_model');
        $resultado = $this->Compania_model->getCompania();
        $dato      = array('consulta' => $resultado);
        $this->load->view('compania/content', $dato);
        $this->load->view('layouts/footer');

    }

    public function nuevo()
    {
        //DEBO AGREGAR LA PLANTILLA
        $this->load->view('compania/formulario');

    }

}
