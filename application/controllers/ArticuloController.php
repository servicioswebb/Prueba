

<?php

class ArticuloController extends CI_Controller
{
    public function compania($id = '')
    {
			
        $fila = $this->Compania_model->getCompaniaById($id);
		$this->load->view('layouts/head');
        $this->load->view('layouts/header');
        $this->load->view('layouts/main');
        //$this->load->model('Compania_model');
        
		$data = array(
		'nomCompa' => $fila->nomCompa,
		'actividadCompa' => $fila->actividadCompa
		);
		
		//$data      = array('contenido' => $fila->idCompa);
		$data      = array('contenido' => $fila->nomCompa);
		//$data      = array('contenido' => $fila->actividadCompa);
        $this->load->view('compania/content1', $data);
        $this->load->view('layouts/footer');

    }
}
