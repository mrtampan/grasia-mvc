<?php
class mahasiswa extends controller
{
    public function index()
    {

        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('mahasiswa_model')->getAllMahasiswa();
        $this->view('template/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('template/footer');
    }
}
