<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Buku</h3>
    </div>
</div>

 <div class="row">
    <!-- column -->
    <div class="col-lg-12">
        <a href="<?php echo base_url('index.php/buku/tambah_data') ?>" class="btn btn-primary mb-3">Tambah Data</a>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id Buku</th>
                                <th>Judul</th>
                                <th>Pengarang</th>
                                <th>Tahun Terbit</th>
                                <th>Jumlah</th>
                                <th colspan="2" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($query as $buku): ?>
                                <tr>
                                    <td><?php echo $buku->id_buku ?></td>
                                    <td><?php echo $buku->judul ?></td>
                                    <td><?php echo $buku->pengarang ?></td>
                                    <td><?php echo $buku->tahun_terbit ?></td>
                                    <td><?php echo $buku->jumlah ?></td>
                                    <td><a href="<?= base_url('index.php/buku/edit_data/' . $buku->id_buku) ?>" class="btn btn-info">Edit data</a></td>
                                    <td>
                                        <form action="<?php echo base_url('index.php/buku/hapus_data') ?>" method="post">
                                            <input type="hidden" name="id_buku" value="<?php echo $buku->id_buku ?>">
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
