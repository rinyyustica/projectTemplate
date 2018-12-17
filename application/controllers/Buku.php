<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
    {
        parent::__construct();
        $this->load->model('model_buku');
    }
	public function index()
	{
		$data['module'] = 'buku/view_buku';
		$data['query'] = $this->model_buku->tampil_data();

		$this->load->view('index', $data);
	}

	public function tambah_data()
	{
		$data['tombol_aksi'] = 'Tambah Data';
		$data['buku'] = NULL;
		$data['module'] ='buku/input_buku';
		$this->load->view('index', $data);
	}

	public function simpan_data($id_buku = 0)
	{
		$data['module'] = 'buku/input_buku';
		$buku['id_buku'] = $this->input->post('id_buku');
		$buku['judul'] = $this->input->post('judul');
		$buku['pengarang'] = $this->input->post('pengarang');
		$buku['tahun_terbit'] = $this->input->post('tahun_terbit');
		$buku['jumlah'] = $this->input->post('jumlah');
		if ($id_buku !== 0) {
			$this->model_buku->update_data($buku, $id_buku);
			redirect(base_url('index.php/buku'));
		}
		else {
			$this->model_buku->input_data($buku);
			redirect(base_url('index.php/buku'));
		}
		$this->load->view('index', $data);
	}

	public function hapus_data()
	{
		$id_buku = $this->input->post('id_buku');
		if ($id_buku) {
			$this->model_buku->hapus_data($id_buku);
		}
			redirect(base_url('index.php/buku'));
	}

	public function edit_data($id = 0)
	{
		$data['tombol_aksi'] = 'Edit Data';
		$data['module'] = 'buku/input_buku';
		if($id !== 0)
        	$data['buku'] = $this->model_buku->edit_data($id);
        else
        	redirect('index.php/buku');
        $this->load->view('index', $data);
	}

}

