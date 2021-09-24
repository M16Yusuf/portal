<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
    }
	public function index()
	{
        $data['judul'] = 'Halaman CMS';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		
        $this->load->view('templates/cms_header',$data);
        $this->load->view('templates/cms_sidebar');
        $this->load->view('templates/cms_topbar');
        $this->load->view('utama/berita',$data);
        $this->load->view('templates/cms_footer');
	}
}
