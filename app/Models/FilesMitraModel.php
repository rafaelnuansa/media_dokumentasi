<?php

namespace App\Models;

use CodeIgniter\Model;

class FilesMitraModel extends Model
{
    protected $table = 'files_mitra';
    protected $primaryKey = 'files_id';
    protected $allowedFields = ['nama', 'deskripsi','fotografer','lokasi','keyword','date_kegiatan', 'kategori', 'status', 'slug', 'date_create'];
    protected $useAutoIncrement = true;
}