<?php

class ListBerita extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $query = $this->db->query('SELECT berita.id, berita.judul, berita.isi, berita.image, user.nama, berita.timestamp FROM berita INNER JOIN user ON berita.author=user.id;');
        $data['berita'] = $query->result_array();
        $data['kontak'] = $this->db->get('aboutus')->result_array();

        // load view portal List berita
        $this->load->view("portal/partial/header");
        $this->load->view("portal/listberita", $data);
        $this->load->view("portal/partial/footer", $data);
    }

    public function detailBerita($id)
    {
        $query = $this->db->query('SELECT berita.id, berita.judul, berita.isi, berita.image, user.nama, berita.timestamp FROM berita INNER JOIN user ON berita.author=user.id WHERE="$id"');
        $data['berita'] = $query->result_array();
        $data['kontak'] = $this->db->get('aboutus')->result_array();
        // load view portal List berita
        $this->load->view("portal/partial/header");
        $this->load->view("portal/listberita", $data);
        $this->load->view("portal/partial/footer", $data);
    }
}
