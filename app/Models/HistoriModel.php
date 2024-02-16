<?php

namespace App\Models;

use CodeIgniter\Model;

class HistoriModel extends Model
{
    protected $table = 'files_histori';
    protected $primaryKey = 'files_id';
    protected $allowedFields = ['nama', 'deskripsi','fotografer', 'harga', 'kategori', 'status', 'slug', 'date_create'];
    protected $useAutoIncrement = true;
}