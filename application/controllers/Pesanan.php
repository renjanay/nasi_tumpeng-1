<?php

class Pesanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pesanan_model');
        $this->load->model('menu_model');
        $this->load->model('meja_model');
        $this->load->model('pelanggan_model');
    }
    public function index()
    {
        $get['x'] = 0;
        $get['data'] = $this->pesanan_model->data();
        $result = $this->pesanan_model->data_count();
        foreach ($result as $value) {
            $get['x']++;
            $get['data'.$get['x']] = $this->pesanan_model->data_per_pesanan($value->id_pesanan);
        }
        // var_dump($get['data0']);
        $this->load->view('pesanan', $get);
    }
    public function view_tambah_pesanan()
    {
        $get['data'] = $this->menu_model->data();
        $this->load->view('pesanan_tambah', $get);
    }
    public function view_pilih_menu()
    {
        $kd = $this->input->get('kd');
        $menu['data'] = $this->menu_model->get_menu($kd);
        $menu['meja'] = $this->meja_model->data();
        $this->load->view('detail_pesanan_tambah', $menu);
    }
    public function tambah_detail_pesanan()
    {
        $bowl['kd_menu'] = $this->input->post('kd_menu');
        $bowl['no_meja'] = $this->input->post('meja');
        $bowl['id_pegawai'] = $this->input->post('id_pegawai');
        $bowl['nama_pelanggan'] = $this->input->post('nama_pelanggan');
        $bowl['stok_menu'] =  $this->input->post('stok_skrg') - $this->input->post('stok');
        $bowl['stok_pesan'] = $this->input->post('stok');
        $id_pelanggan = $this->pelanggan_model->tambah($bowl);
        $id_pesanan = $this->pesanan_model->tambah($bowl, $id_pelanggan);
        $this->pesanan_model->tambah_detail($bowl, $id_pesanan);
        $this->menu_model->update($bowl);
        redirect('pesanan');
    }
}
