<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
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
        $this->load->model('model_anggota');
    }
    public function index()
    {
        $data['module'] = 'anggota/view_anggota';
        $data['query'] = $this->model_anggota->tampil_data();

        $this->load->view('index', $data);
    }

    public function tambah_data()
    {
        $data['tombol_aksi'] = 'Tambah Data';
        $data['anggota'] = NULL;
        $data['module'] ='anggota/input_anggota';
        $this->load->view('index', $data);
    }

    public function simpan_data($nomor_induk = 0)
    {
        $data['module'] = 'anggota/input_anggota';
        $anggota['nomor_induk'] = $this->input->post('nomor_induk');
        $anggota['nama_lengkap'] = $this->input->post('nama_lengkap');
        $anggota['jenis_kelamin'] = $this->input->post('jenis_kelamin');
        $anggota['departemen'] = $this->input->post('departemen');
        $anggota['tempat_lahir'] = $this->input->post('tempat_lahir');
        $anggota['alamat'] = $this->input->post('alamat');
        if ($nomor_induk !== 0) {
            $this->model_anggota->update_data($anggota, $nomor_induk);
            redirect(base_url('index.php/anggota'));
        }
        else {
            $this->model_anggota->input_data($anggota);
            redirect(base_url('index.php/anggota'));
        }
        $this->load->view('index', $data);
    }

    public function hapus_data()
    {
        $nomor_induk = $this->input->post('nomor_induk');
        if ($nomor_induk) {
            $this->model_anggota->hapus_data($nomor_induk);
        }
            redirect(base_url('index.php/anggota'));
    }

    public function edit_data($nomor_induk = 0)
    {
        $data['tombol_aksi'] = 'Edit Data';
        $data['module'] = 'anggota/input_anggota';
        if($nomor_induk !== 0)
            $data['anggota'] = $this->model_anggota->edit_data($nomor_induk);
        else
            redirect('index.php/anggota');
        $this->load->view('index', $data);
    }

}

