<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
class Tutoria extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {
        $mensaje['tutoria'] = 'Esto es una variable';
        $this->load->view('bienvenido', $mensaje);
    }

    public function holaMundo()
    {
        $mensaje['tutoria'] = 'Esto es una variable';
        $this->load->view('bienvenido', $mensaje);

    }

}
