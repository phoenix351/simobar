<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggunaModel extends Model
{
    protected $table = 'pegawai';
    public function getPegawai()
    {
        return $this->findAll();
    }
    public function getPegawaiByNip($nip)
    {
        return $this->asArray()
            ->where(['nip' => $nip])
            ->first();
    }

    public function tambahPegawai($nama, $nip, $jabatan, $bidang, $katasandi)
    {
        $data = [
            "namaLengkap" => $nama,
            "nip" => $nip,
            "jabatan" => $jabatan,
            "bidang" => $bidang,
            "katasandi" => password_hash($katasandi, PASSWORD_BCRYPT)
        ];
        return $this->insert($data);
    }
    public function updatePegawai($nip)
    {
        //
        return $nip;
    }
}
