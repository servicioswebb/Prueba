

<?php


class ArticuloController extends CI_Controller
{
    public function compania($id ='')
	{
		$fila = $this->Compania_model->getCompaniaById($id);
			echo $fila->idCompa;
	}
}
