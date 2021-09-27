<?php

class Overview extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $query = $this->db->query('SELECT berita.id, berita.judul, berita.isi, berita.image, user.nama, berita.timestamp FROM berita INNER JOIN user ON berita.author=user.id;');
        $count = $this->db->query('SELECT COUNT(judul) FROM berita');

        $data['berita'] = $query->result_array();
        $data['jumlahberita'] = $this->db->count_all('berita');
        // $data['news'] = $this->db->get('berita')->result_array();
        $data['kontak'] = $this->db->get('aboutus')->result_array();
        // load view portal Overview
        $this->load->view("portal/partial/header");
        $this->load->view("portal/overview", $data);
        $this->load->view("portal/partial/footer", $data);
    }
}
