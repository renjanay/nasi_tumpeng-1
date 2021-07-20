<?php

class Meja extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('meja_model');
    }
    public function index()
    {
        $get['data'] = $this->meja_model->data();
        $this->load->view('meja', $get);
    }
}
