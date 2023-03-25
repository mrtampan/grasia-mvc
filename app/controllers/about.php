<?php

class about extends controller
{
    public function index($nama = 'Grasia', $pekerjaan = 'pelajar')
    {
        $data['judul'] = 'About';
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;

        $this->view('template/header', $data);
        $this->view('about/index', $data);
        $this->view('template/footer');
    }
}
