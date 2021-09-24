<?php

class Struktur extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['kontak'] = $this->db->get('aboutus')->result_array();
        // load view portal/struktur.php
        $this->load->view("portal/partial/header");
        $this->load->view("portal/struktur");
        $this->load->view("portal/partial/footer", $data);
    }
}
