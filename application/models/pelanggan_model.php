<?php

  class Pelanggan_model extends CI_Model
  {
      public function tambah($bowl)
      {
          $this->db->query("insert into pelanggan(nama_pelanggan) values('".$bowl['nama_pelanggan']."');");
          $insert_id = $this->db->insert_id();
          return $insert_id;
      }
  }
