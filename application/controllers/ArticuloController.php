

<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');

}
class ArticuloController extends CI_Controller
{
    public function compania($id ='')
	{
		$fila = $this->Compania_model->getCompaniaByName($id);
		echo $fila->Compania_model;
			echo $fila->contenido;
	}
}
