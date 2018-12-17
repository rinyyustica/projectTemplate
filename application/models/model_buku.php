<?php

class model_buku extends CI_Model
{

    function tampil_data() {
        return $this->db->get('data_buku')->result();
    }

    function input_data($data) {
        return $this->db->insert('data_buku', $data);
    }

    function hapus_data($id_buku) {
        return $this->db
                ->where('id_buku', $id_buku)
                ->delete('data_buku');
    }

    function edit_data($id_buku) {
        return $this->db->get_where('data_buku', array('id_buku'=>$id_buku))->row();
    }

    function update_data($data, $id_buku) {
        $this->db->where('id_buku', $id_buku);
        $this->db->update('data_buku', $data);
    }

}