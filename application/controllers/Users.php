<?php

class Users extends CI_Controller{

public function index()
{
    $this->load->view('users');
}
public function add()
{
    $this->load->view('users_form');
}
}


?>