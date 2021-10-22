<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <div class="box-header">
    <div class="col-md-3" style="padding: 1;">
      <button class="form-control btn btn-primary" data-toggle="modal" data-target="#tambah-pegawai"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Pegawai</button>
    </div>
    <div class="col-md-3" style="padding: 1;">
      <form action="<?= base_url() . 'flexcode/hub_ci.php'; ?>" method='post' name='from_ci'>
        <?php
        $status = base64_encode($this->session->userdata('status'));
        ?>
        <input type="hidden" name="status" value="<?php echo $status; ?>">

      </form>
      <!--form ini untuk menghubungkan dengan kode flexcode-->
    </div>

  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <div style="overflow-x:auto;">
      <!-- scroll hozontal-->
      <table id="list-data" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>NIP</th>
            <th>Nama</th>
            <th>No Telp</th>
            <th>Asal kota</th>
            <th>Jenis Kelamin</th>
            <th>Jabatan</th>
            <th style="text-align: center;">Aksi</th>
          </tr>
        </thead>
        <tbody id="data-pegawai">
        </tbody>
    </div>
    </table>
  </div>
</div>

<?php echo $modal_tambah_pegawai;
?>

<div id="tempat-modal"></div>

<?php show_my_confirm('konfirmasiHapus', 'hapus-dataPegawai', 'Hapus Data Ini?', 'Ya, Hapus Data Ini'); ?>