<?php

class AddUsers extends CI_Controller{

public function index()
{
    $this->load->view('addusers');
}
}
class Allusers extends CI_Controller{
    
    public function index()
    {
        $this->load->view('allusers');
    }
}


?>