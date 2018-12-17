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
<div class="card">
    <div class="card-body">
        <form class="form-horizontal form-material" action="<?php echo base_url('index.php/anggota/simpan_data/'. ($anggota ? $anggota->nomor_induk : '')) ?>" method="post">
            <div class="form-group">
                <label class="col-md-12">Nomor Induk</label>
                <div class="col-md-12">
                    <input type="text" placeholder="" class="form-control form-control-line" name="nomor_induk" value="<?= $anggota ? $anggota->nomor_induk : '' ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="example-email" class="col-md-12">Nama Lengkap</label>
                <div class="col-md-12">
                    <input type="text" placeholder="" class="form-control form-control-line" name="nama_lengkap" value="<?= $anggota ? $anggota->nama_lengkap : '' ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-12">Jenis Kelamin</label>
                <div class="col-md-12">
                    <div class="row mt-4">
                        <div class="ml-2">
                            <input type="radio" name="jenis_kelamin" id="laki_laki" value="L" <?= $anggota ? ($anggota->jenis_kelamin == 'L' ? 'checked' : '') : '' ?>>
                            <label for="laki_laki">Laki Laki</label>
                       </div>
                       <div class="ml-4">
                           <input type="radio" name="jenis_kelamin" id="perempuan" value="P" <?= $anggota ? ($anggota->jenis_kelamin == 'P' ? 'checked' : '') : '' ?>>
                            <label for="perempuan">Perempuan</label>
                       </div>
                    </div>
                </div>
            </div>
             <div class="form-group">
                <label class="col-md-12">Departemen</label>
                <div class="col-md-12">
                    <input type="text" placeholder="" class="form-control form-control-line" name="departemen" value="<?= $anggota? $anggota->departemen : '' ?>">
                </div>
            </div>
             <div class="form-group">
                <label class="col-md-12">Tempat Lahir</label>
                <div class="col-md-12">
                    <input type="text" placeholder="" class="form-control form-control-line" name="tempat_lahir" value="<?= $anggota ? $anggota->tempat_lahir : '' ?>">
                </div>
             </div>
             <div class="form-group">
                <label class="col-md-12">Alamat</label>
                <div class="col-md-12">
                    <input type="text" placeholder="" class="form-control form-control-line" name="alamat" value="<?= $anggota? $anggota->alamat : '' ?>">
                </div>
            </div>

              <div class="form-group">
                <div class="col-sm-12">
                    <button class="btn btn-success"><?= $tombol_aksi  ?></button>
                </div>
            </div>
        </form>
    </div>
</div>