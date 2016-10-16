

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
        //$this->load->model('Compania');
    }

    public function index()
    {

        /* $this->load->library('menu', array('Inicio', 'Compania'));
        $data['mi_menu'] = $this->menu->construirMenu();
        $this->load->view('compania/bienvenido', $data);
         */
        $this->load->view('layouts/header');
        $this->load->view('layouts/main');
        $this->load->view('layouts/about');
        $this->load->view('layouts/download');
        $this->load->view('layouts/contact');
        $this->load->view('layouts/footer');
    }

    public function nuevo()
    {
        //DEBO AGREGAR LA PLANTILLA
        $this->load->view('compania/formulario');

    }

}
