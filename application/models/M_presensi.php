<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_presensi extends CI_Model
{
    public function select_all_presensi()
    {
        $sql = "SELECT * FROM presensi";

        $data = $this->db->query($sql);

        return $data->result();
    }

    public function select_all()
    {
        $sql = "select * from presensi";
        //$sql = " SELECT pegawai.id AS id, pegawai.nama AS pegawai, pegawai.telp AS telp, kota.nama AS kota, kelamin.nama AS kelamin, jabatan.nama AS jabatan FROM pegawai, kota, kelamin, jabatan WHERE pegawai.id_kelamin = kelamin.id AND pegawai.id_jabatan = jabatan.id AND pegawai.id_kota = kota.id";

        $data = $this->db->query($sql);

        return $data->result();
    }

    public function select_by_id($id_presensi)
    {
        $sql = "select * from presensi where id_presensi='{$id_presensi}'";
        //$sql = "SELECT pegawai.id AS id_pegawai, pegawai.nama AS nama_pegawai, pegawai.id_kota, pegawai.id_kelamin, pegawai.id_jabatan, pegawai.telp AS telp, kota.nama AS kota, kelamin.nama AS kelamin, jabatan.nama AS jabatan FROM pegawai, kota, kelamin, jabatan WHERE pegawai.id_kota = kota.id AND pegawai.id_kelamin = kelamin.id AND pegawai.id_jabatan = jabatan.id AND pegawai.id = '{$id}'";

        $data = $this->db->query($sql);

        return $data->row();
    }

    // public function select_by_jabatan($jbt)
    // {
    //     $sql = "SELECT COUNT(*) AS jml FROM pegawai WHERE jabatan = '{$jbt}'";

    //     $data = $this->db->query($sql);

    //     return $data->row();
    // }

    // public function select_by_kota($nama)
    // {
    //     $sql = "SELECT COUNT(*) AS jml FROM pegawai WHERE kota = '{$nama}'";

    //     $data = $this->db->query($sql);

    //     return $data->row();
    // }

    public function update($where, $table, $data)
    {
        $this->db->where($where);
        return $this->db->update($table, $data);
    }

    public function delete($id_presensi)
    {
        $sql = "DELETE FROM presensi WHERE id_presensi='" . $id_presensi . "'";

        $this->db->query($sql);

        return $this->db->affected_rows();
    }

    public function insert($data, $table)
    {
        return $this->db->insert($table, $data);
    }

    public function insert_batch($data)
    {
        $this->db->insert_batch('presensi', $data);

        return $this->db->affected_rows();
    }

    public function check_nama($nama)
    {
        $this->db->where('nama', $nama);
        $data = $this->db->get('presensi');
        return $data->num_rows();
    }

    // public function pertemuan($id_presensi = 0)
    // {
    //     $data['log'] = $this->db->get_where('presensi', array('id_presensi' => $this->session->userdata('username')))->result();
    //     $cek = $this->session->userdata('logged_in');
    //     $stts = $this->session->userdata('stts');
    //     /*jika status login Yes dan status admin tampilkan*/
    //     if (!empty($cek) && $stts == 'admin') {

    //         //*layout 
    //         $data['title'] = 'Daftar Buku Kembali';
    //         $data['pointer'] = "Pinjam";
    //         $data['classicon'] = "fa fa-book";
    //         $data['main_bread'] = "Data buku Kembali";
    //         $data['sub_bread'] = "Daftar Buku Kembali";
    //         $data['desc'] = "Data Buku Kembali, Menampilkan data Buku yang di Kemblikan";


    //         //echo $id;
    //         $this->db->where('id_pinjam', $id);
    //         $query = $this->db->get('tb_pinjam')->result();
    //         foreach ($query as $row) {
    //             $tgl = $row->tgl_kembali;
    //         }
    //         //select dendan dengan status A
    //         $this->db->where('status', 'A');
    //         $query11 = $this->db->get('tb_denda')->result();
    //         foreach ($query11 as $key => $row11) {
    //             $id_denda = $row11->id_denda;
    //             $d = $row11->denda;
    //         }
    //         // Hitung selisih hari pengembalian
    //         $SLS = ((strtotime($this->input->post('tgl_kembali')) - strtotime($tgl)) / (60 * 60 * 24));
    //         if ($SLS > 0) {
    //             //hitung jumlah dennda jika terlambat lebih dari 0
    //             $total_pertemuan = $d * $SLS;
    //             $telat = $SLS;
    //         }
    //         //jika terlambat korang dari 0 maka terlambat & jumlah denda dianggap 0 
    //         else {
    //             $SLS = 0;
    //             $total_pertemuan = 0;
    //         }
    //         $total_pertemuan;
    //         // buat data berupa array untuk dimasukan ke dalam database
    //         $t = $this->input->post('tgl_kembali');
    //         $s = substr($t, 0, 2);
    //         $s1 = substr($t, 3, 2);
    //         $s2 = substr($t, 6, 6);
    //         $s3 = $s2 . "/" . $s . '/' . $s1;
    //         $kem = array(
    //             'id_kembali' => '',
    //             'id_pinjam' => $id,
    //             'tgl_dikembalikan' => $s3,
    //             'terlambat' => $SLS,
    //             'id_denda' => $id_denda,
    //             'denda' => $total_pertemuan
    //         );
    //         $insert = $this->Buku_model->insertData('tb_kembali', $kem);
    //         $this->db->where('id_pinjam', $id);
    //         $query = $this->db->get('tb_detail_pinjam')->result();
    //         foreach ($query as $key => $row) {
    //             $id_detail_pinjam = $row->id_detail_pinjam;
    //             $id_buku = $row->id_buku;
    //             $no_buku = $row->no_buku;
    //             //update status pada detail buku
    //             $this->db->set('status', 1);
    //             $this->db->where('id_buku', $id_buku);
    //             $this->db->where('no_buku', $no_buku);
    //             $this->db->update('tb_detail_buku');
    //             //update flag detail pinjam
    //             $this->db->set('flag', 1);
    //             $this->db->where('id_detail_pinjam', $id_detail_pinjam);
    //             $this->db->update('tb_detail_pinjam');
    //         }
    //         $this->db->set('status', 1);
    //         $this->db->where('id_pinjam', $id);
    //         $this->db->update('tb_pinjam');

    //         $data['data_detail_buku'] = $this->Buku_model->getAllData("tb_detail_buku");
    //         $data['data_buku'] = $this->Buku_model->getAllData("tb_buku");
    //         $data['data_anggota'] = $this->Buku_model->getAllData("tb_anggota");
    //         $data['data_pinjam'] = $this->Buku_model->get_detail1("tb_pinjam", "id_pinjam", $id);
    //         $data['kembali'] = $this->Buku_model->get_detail1("tb_kembali", "id_pinjam", $id);
    //         $data['data_detail_pinjam'] = $this->Buku_model->getAllData("tb_detail_pinjam");
    //         $tmp['content'] = $this->load->view('admin/kembali/Buku_kembali', $data, TRUE);
    //         $this->load->view('admin/layout', $tmp);
    //         //redirect('admin/Kembali','refresh');
    //     } else
    //     /*jika status login NO atau status bukan admin kembalikan ke login*/ {
    //         header('location:' . base_url() . 'web/log');
    //     }
    // }


    public function total_rows()
    {
        $data = $this->db->get('presensi');

        return $data->num_rows();
    }
}

/* End of file M_pegawai.php */
/* Location: ./application/models/M_pegawai.php */