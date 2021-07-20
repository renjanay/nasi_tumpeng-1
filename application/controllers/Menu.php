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
    public function tambah_menu()
    {
        $no = $this->input->get('no');
        $status = $this->input->get('status');
        echo $no;
        echo $status;
    }
}
