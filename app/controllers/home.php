<?php

class home extends controller
{
    public function index()
    {
        $data['judul'] = 'Home';
        $data['nama'] = $this->model('user_model')->getUser();
        $this->view('template/header', $data);
        $this->view('home/index', $data);
        $this->view('template/footer');
    }
}
