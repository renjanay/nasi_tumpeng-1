<?php

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('menu_model');
    }
    public function index()
    {
        $get['data'] = $this->menu_model->data();
        $this->load->view('menu', $get);
    }
}
