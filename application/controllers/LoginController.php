<?php

/**
 *
 */
class LoginController extends CI_Controller
{

    public function index()
    {
        $user     = $this->input->post('user');
        $password = $this->input->post('password');
        echo $user . "" . $password;
    }
}
