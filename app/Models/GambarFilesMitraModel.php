<?php

namespace App\Models;

use CodeIgniter\Model;

class GambarFilesMitraModel extends Model
{
    protected $table = 'files_gambar_mitra';
    protected $primaryKey = 'id';
    protected $allowedFields = ['files_id', 'url_gambar','files_alias' ,'is_utama'];

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;
    protected $useTimestamps  = false;

    public function getGambarByProdukId($produkId)
    {
        return $this->where('files_id', $produkId)->findAll();
    }
}