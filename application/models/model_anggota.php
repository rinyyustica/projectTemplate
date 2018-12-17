<?php

class model_anggota extends CI_Model
{

    function tampil_data() {
        return $this->db->get('data_anggota')->result();
    }

    function input_data($data) {
        return $this->db->insert('data_anggota', $data);
    }

    function hapus_data($nomor_induk) {
        return $this->db
                ->where('nomor_induk', $nomor_induk)
                ->delete('data_anggota');
    }

    function edit_data($nomor_induk) {
        return $this->db->get_where('data_anggota', array('nomor_induk'=>$nomor_induk))->row();
    }

    function update_data($data, $nomor_induk) {
        $this->db->where('nomor_induk', $nomor_induk);
        $this->db->update('data_anggota', $data);
    }

}