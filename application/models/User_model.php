<?php

/**
 *
 */
class LoginController extends CI_Controller
{

    public function gerUser()
    {
	$result = $this->db->query(" SELECT * FROM usuario WHERE nomUsu='" . $nUsu . "' and claUsu='" . $claUsu . "' LIMIT 1");
    }
}
