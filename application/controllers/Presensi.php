<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Presensi extends AUTH_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pegawai');
        $this->load->model('M_presensi');
    }

    public function index()
    {
        $data['userdata'] = $this->userdata;
        $data['dataPresensi'] = $this->M_presensi->select_all_presensi();
        $data['dataPegawai'] = $this->M_pegawai->select_all();

        $data['page'] = "presensi";
        $data['judul'] = "Data Presensi";
        $data['deskripsi'] = "Manage Data Presensi";

        $data['modal_tambah_presensi'] = show_my_modal('modals/modal_tambah_presensi', 'tambah-presensi', $data);
        $this->template->views('presensi/home', $data);
    }

    public function tampil()
    {
        $data['dataPresensi'] = $this->M_presensi->select_all();
        $this->load->view('presensi/list_data', $data);
    }

    public function prosesTambah()
    {

        //validasi form dengan cek eksistensi di database
        $this->form_validation->set_rules('nip', 'NIP', 'trim|required');
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $nip = $this->input->post('nip');
        $nama = $this->input->post('nama');
        $jumlah_hadir = $this->input->post('jumlah_hadir');
        $jumlah_izin = $this->input->post('jumlah_izin');
        $jumlah_alpha = $this->input->post('jumlah_alpha');
        $data = array(
            'nip' => $nip,
            'nama' => $nama,
            'jumlah_hadir' => $jumlah_hadir,
            'jumlah_izin' => $jumlah_izin,
            'jumlah_alpha' => $jumlah_alpha,
        );
        if ($this->form_validation->run() == TRUE) {
            $result = $this->M_presensi->insert($data, 'presensi');

            if ($result > 0) {
                $out['status'] = '';
                $out['msg'] = show_succ_msg('Data Presensi Pegawai Berhasil ditambahkan', '15px');
            } else {
                $out['status'] = '';
                $out['msg'] = show_err_msg('Data Presensi Pegawai Gagal ditambahkan', '15 px');
            }
        } else {
            $out['status'] = 'form';
            $out['msg'] = show_err_msg(validation_errors());
        }

        echo json_encode($out);
    }

    public function update()
    {
        $id_presensi = trim($_POST['id_presensi']);
        $data['dataPresensi'] = $this->M_presensi->select_by_id($id_presensi);
        $data['dataPegawai'] = $this->M_pegawai->select_all();
        $data['userdata'] = $this->userdata;
        echo show_my_modal('modals/modal_update_presensi', 'update-presensi', $data);
    }

    public function prosesUpdate()
    {
        $this->form_validation->set_rules('nip', 'NIP', 'trim|required');
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $id_presensi = $this->input->post('id_presensi');
        $nip = $this->input->post('nip');
        $nama = $this->input->post('nama');
        $jumlah_hadir = $this->input->post('jumlah_hadir');
        $jumlah_izin = $this->input->post('jumlah_izin');
        $jumlah_alpha = $this->input->post('jumlah_alpha');
        $data = array(
            'nip' => $nip,
            'nama' => $nama,
            'jumlah_hadir' => $jumlah_hadir,
            'jumlah_izin' => $jumlah_izin,
            'jumlah_alpha' => $jumlah_alpha,
        );
        $where = array('id_presensi' => $id_presensi);
        $table = 'presensi';
        //$data = $this->input->post(); //skrip ini bisa digunakan untuk pemanggilan masing-masing form pada bagian models
        if ($this->form_validation->run() == TRUE) {
            $result = $this->M_presensi->update($where, $table, $data);

            if ($result > 0) {
                $out['status'] = '';
                $out['msg'] = show_succ_msg('Data Presensi Pegawai Berhasil diupdate', '15px');
            } else {
                $out['status'] = '';
                $out['msg'] = show_succ_msg('Data Presensi Pegawai Gagal diupdate', '15px');
            }
        } else {
            $out['status'] = 'form';
            $out['msg'] = show_err_msg(validation_errors());
        }

        echo json_encode($out);
    }

    public function delete()
    {
        $id_presensi = $_POST['id_presensi'];
        $result = $this->M_presensi->delete($id_presensi);

        if ($result > 0) {
            echo show_succ_msg('Data Presensi Pegawai Berhasil dihapus', '15px');
        } else {
            echo show_err_msg('Data Presensi Pegawai Gagal dihapus', '15px');
        }
    }
}

/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */