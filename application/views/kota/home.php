<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <div class="box-header">
    <div class="col-md-6">
      <button class="form-control btn btn-primary" data-toggle="modal" data-target="#tambah-kota"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Data</button>
    </div>

  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <div style="overflow-x:auto;">
      <!-- scroll horizontal-->
      <table id="list-data" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Nama Kota</th>
            <th style="text-align: center;">Aksi</th>
          </tr>
        </thead>
        <tbody id="data-kota">

        </tbody>
      </table>
    </div>
  </div> <!-- /.box-body -->
</div>

<?php echo $modal_tambah_kota; ?>

<div id="tempat-modal"></div>

<?php show_my_confirm('konfirmasiHapus', 'hapus-dataKota', 'Hapus Data Ini?', 'Ya, Hapus Data Ini'); ?>