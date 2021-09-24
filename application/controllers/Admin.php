<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->load->library('form_validation');
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
    }
	public function index()
	{
        $data['judul'] = 'Halaman CMS';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['admin'] = $this->db->get('user')->result_array();
        $this->load->view('templates/cms_header',$data);
        $this->load->view('templates/cms_sidebar');
        $this->load->view('templates/cms_topbar');
        $this->load->view('utama/admin',$data);
        $this->load->view('templates/cms_footer');

	}

	public function tambah()
	{

		$this->form_validation->set_rules(
            'username',
            'Username',
            'required|trim|is_unique[user.username]',
            array(
                'required' => 'Username tidak boleh kosong!',
                'is_unique' => 'Username yang digunakan telah terdaftar!'
            )
        );
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', array('required' => 'Field tidak boleh kosong',)); 

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Halaman CMS';
			$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
			$data['admin'] = $this->db->get('user')->result_array();
			$this->load->view('templates/cms_header',$data);
			$this->load->view('templates/cms_sidebar');
			$this->load->view('templates/cms_topbar');
			$this->load->view('utama/admin',$data);
			$this->load->view('templates/cms_footer');
        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('username')),
                'nama' => htmlspecialchars($this->input->post('nama')),
                'password' => password_hash('admin', PASSWORD_DEFAULT),
                'role' => htmlspecialchars($this->input->post('role'))
            ];
            $this->db->insert('user',$data);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert">
            Selamat akun berhasil dibuat.
            </div>'
            );
            redirect('admin');
        }
	}

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
        $this->session->set_flashdata('message', '
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    User berhasil dihapus.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    ');
        redirect('admin');
    }
}
