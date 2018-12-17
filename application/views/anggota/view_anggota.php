<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Anggota</h3>
    </div>
</div>

 <div class="row">
    <!-- column -->
    <div class="col-lg-12">
        <a href="<?php echo base_url('index.php/anggota/tambah_data') ?>" class="btn btn-primary mb-3">Tambah Data</a>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nomor Induk</th>
                                <th>Nama Lengkap</th>
                                <th>Jenis Kelamin</th>
                                <th>Departemen</th>
                                <th>Tempat Lahir</th>
                                <th>Alamat</th>
                                <th colspan="2" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($query as $anggota): ?>
                                <tr>
                                    <td><?php echo $anggota->nomor_induk ?></td>
                                    <td><?php echo $anggota->nama_lengkap ?></td>
                                    <td><?php echo $anggota->jenis_kelamin ?></td>
                                    <td><?php echo $anggota->departemen ?></td>
                                    <td><?php echo $anggota->tempat_lahir ?></td>
                                    <td><?php echo $anggota->alamat ?></td>
                                    <td><a href="<?= base_url('index.php/anggota/edit_data/' . $anggota->nomor_induk) ?>" class="btn btn-info">Edit data</a></td>
                                    <td>
                                        <form action="<?php echo base_url('index.php/anggota/hapus_data') ?>" method="post">
                                            <input type="hidden" name="nomor_induk" value="<?php echo $anggota->nomor_induk ?>">
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Delete</button>
                                        </form>
                                         
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
