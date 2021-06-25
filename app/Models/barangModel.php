<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table = 'barang';
    public function getBarang()
    {
        return $this->findAll();
    }
    public function getBarangByNip($nip)
    {
        return $this->asArray()
            ->where(['nip' => $nip])
            ->first();
    }
}
