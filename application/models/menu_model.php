<?php

  class Menu_model extends CI_Model
  {
      public function data()
      {
          $query = $this->db->query("select * from menu");
          return $query->result();
      }
  }
