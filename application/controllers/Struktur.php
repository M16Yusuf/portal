<?php

class Struktur extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        // load view admin/overview.php
        $this->load->view("portal/partial/header");
        $this->load->view("portal/struktur");
        $this->load->view("portal/partial/footer");
    }
}
