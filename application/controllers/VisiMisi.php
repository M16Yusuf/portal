<?php

class VisiMisi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['kontak'] = $this->db->get('aboutus')->result_array();
        // load view admin/overview.php
        $this->load->view("portal/partial/header");
        $this->load->view("portal/visimisi");
        $this->load->view("portal/partial/footer", $data);
    }
}
