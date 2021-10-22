<?php
  foreach ($dataPegawai as $pegawai) {
    ?>
    <tr>
	  <td><?php echo $pegawai->nip; ?></td>
      <td style="min-width:50px;"><?php echo $pegawai->nama; ?></td>
      <td><?php echo $pegawai->telp; ?></td>
      <td><?php echo $pegawai->kota; ?></td>
      <td><?php echo $pegawai->kelamin; ?></td>
      <td><?php echo $pegawai->jabatan; ?></td>
      <td class="text-center" style="min-width:200px;"><!-- style for lebar kolom -->
        <button class="btn btn-warning btn-sm update-dataPegawai" data-id="<?php echo $pegawai->id; ?>"><i class="glyphicon glyphicon-repeat"></i> Update</button>
        <button class="btn btn-danger btn-sm konfirmasiHapus-pegawai" data-id="<?php echo $pegawai->id; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
      </td>
    </tr>
    <?php
  }
?>