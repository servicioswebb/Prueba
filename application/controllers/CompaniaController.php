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
        //$this->load->model('Compania');
    }

    public function index()
    {
        $this->load->view('compania/bienvenido');
    }

}
