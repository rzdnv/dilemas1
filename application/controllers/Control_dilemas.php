<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Control_dilemas extends CI_Controller
{

    public function index()
    {
        $this->load->view('Tampilan');

    }

    public function tabel()
    {
        $data['nama'] = $this ->input->post('nama');
        $data['nis'] = $this ->input->post('nis');
        $data['kelas'] = $this ->input->post('kelas');
        $data['tanggal_lahir'] = $this ->input->post('tanggal_lahir');
        $data['tempat_lahir'] = $this ->input->post('tempat_lahir');
        $data['alamat'] = $this ->input->post('alamat');
        $data['agama'] = $this ->input->post('agama');
        $data['jenis_kelamin'] = $this ->input->post('jenis_kelamin');

        $this->load->view('jawaban', $data);
    }
}