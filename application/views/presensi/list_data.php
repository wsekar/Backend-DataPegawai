<?php
foreach ($dataPresensi as $presensi) {
?>
    <tr>
        <td><?php echo $presensi->$id_presensi; ?></td>
        <td><?php echo $presensi->nip; ?></td>
        <td style="min-width:50px;"><?php echo $presensi->nama; ?></td>
        <td><?php echo $presensi->jumlah_hadir; ?></td>
        <td><?php echo $presensi->jumlah_izin; ?></td>
        <td><?php echo $presensi->jumlah_alpha; ?></td>
        <td><?php echo $presensi->total_pertemuan; ?></td>
        <td class="text-center" style="min-width:200px;">
            <!-- style for lebar kolom -->
            <button class="btn btn-warning btn-sm update-dataPegawai" data-id_presensi="<?php echo $presensi->id_presensi; ?>"><i class="glyphicon glyphicon-repeat"></i> Update</button>
            <button class="btn btn-danger btn-sm konfirmasiHapus-pegawai" data-id_presensi="<?php echo $presensi->id_presensi; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
        </td>
    </tr>
<?php
}
?>