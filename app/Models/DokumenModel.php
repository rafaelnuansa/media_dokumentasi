<?php

namespace App\Models;

use CodeIgniter\Model;

class DokumenModel extends Model
{
    protected $table      = 'dokumen';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'deskripsi', 'keyword', 'thumbnail', 'slug', 'created_at', 'updated_at'];
}
