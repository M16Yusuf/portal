<?php

class Overview extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['kontak'] = $this->db->get('aboutus')->result_array();
        // load view portal Overview
        $this->load->view("portal/partial/header");
        $this->load->view("portal/overview");
        $this->load->view("portal/partial/footer",$data);
    }
}
