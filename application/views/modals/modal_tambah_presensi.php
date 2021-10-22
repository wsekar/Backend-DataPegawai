<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
    <div class="form-msg"></div>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h3 style="display:block; text-align:center;">Tambah Data Presensi</h3>

    <form id="form-tambah-presensi" method="POST">
        <div class="input-group form-group">
            <span class="input-group-addon" id="sizing-addon2">
                <i class="glyphicon glyphicon-tag"></i>
            </span>
            <select name="nip" class="form-control select2" aria-describedby="sizing-addon2" style="width: 100%">
                <?php
                foreach ($dataPegawai as $pegawai) {
                ?>
                    <option value="<?php echo $pegawai->nip; ?>">
                        <?php echo $pegawai->nip; ?>
                    </option>
                <?php
                }
                ?>
            </select>
        </div>

        <div class="input-group form-group">
            <span class="input-group-addon" id="sizing-addon2">
                <i class="glyphicon glyphicon-home"></i>
            </span>
            <select name="nama" class="form-control select2" aria-describedby="sizing-addon2" style="width: 100%">
                <?php
                foreach ($dataPegawai as $pegawai) {
                ?>
                    <option value="<?php echo $pegawai->nama; ?>">
                        <?php echo $pegawai->nama; ?>
                    </option>
                <?php
                }
                ?>
            </select>
        </div>

        <div class="input-group form-group">
            <span class="input-group-addon" id="sizing-addon2">
                <i class="glyphicon glyphicon-briefcase"></i>
            </span>
            <input type="text" class="form-control" placeholder="Jumlah Hadir" name="jumlah_hadir" aria-describedby="sizing-addon2">
        </div>
        <div class="input-group form-group">
            <span class="input-group-addon" id="sizing-addon2">
                <i class="glyphicon glyphicon-briefcase"></i>
            </span>
            <input type="text" class="form-control" placeholder="Jumlah Izin" name="jumlah_izin" aria-describedby="sizing-addon2">
        </div>
        <div class="input-group form-group">
            <span class="input-group-addon" id="sizing-addon2">
                <i class="glyphicon glyphicon-briefcase"></i>
            </span>
            <input type="text" class="form-control" placeholder="Jumlah Alpha" name="jumlah_alpha" aria-describedby="sizing-addon2">
        </div>

        <div class="form-group">
            <div class="col-md-12">
                <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Tambah Data</button>
            </div>
        </div>
    </form>
</div>