<?php

class mahasiswa_model
{
    private $mhs = [
        [
            "nama" => "jihyo",
            "nim" => "321121",
            "jurusan" => "teknik mesin"
        ],
        [
            "nama" => "dahyun",
            "nim" => "321122",
            "jurusan" => "pertanian"
        ]
    ];

    public function getAllMahasiswa()
    {
        return $this->mhs;
    }
}
