<?php

  class Meja_model extends CI_Model
  {
      public function data()
      {
          $query = $this->db->query("select * from meja");
          return $query->result();
      }
  }
