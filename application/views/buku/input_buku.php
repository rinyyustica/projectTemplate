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
<div class="card">
    <div class="card-body">
        <form class="form-horizontal form-material" action="<?php echo base_url('index.php/buku/simpan_data/'. ($buku ? $buku->id_buku : '')) ?>" method="post">
            <div class="form-group">
                <label class="col-md-12">ID Buku</label>
                <div class="col-md-12">
                    <input type="text" placeholder="" class="form-control form-control-line" name="id_buku" value="<?= $buku ? $buku->id_buku : '' ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="example-email" class="col-md-12">Judul</label>
                <div class="col-md-12">
                    <input type="text" placeholder="" class="form-control form-control-line" name="judul" value="<?= $buku ? $buku->judul : '' ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-12">Pengarang</label>
                <div class="col-md-12">
                    <input type="text" placeholder="" class="form-control form-control-line" name="pengarang" value="<?= $buku ? $buku->pengarang : '' ?>">
                </div>
            </div>
             <div class="form-group">
                <label class="col-sm-12">Tahun Terbit</label>
                <div class="col-sm-12">
                    <select class="form-control form-control-line" name="tahun_terbit">
                        <?php for ($i=1980; $i <= date('Y'); $i++) : ?>
                            <option value="<?php echo $i; ?>" <?= $buku ? ($buku->tahun_terbit == $i ? 'selected' : '') : ''?> ><?php echo $i; ?></option>
                        <?php endfor ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-12">Jumlah</label>
                <div class="col-md-12">
                    <input type="text" placeholder="" class="form-control form-control-line" name="jumlah" value="<?= $buku ? $buku->jumlah : '' ?>">
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