<?php

namespace App\Models;

use CodeIgniter\Model;

class DokumenFileModel extends Model
{
    protected $table      = 'dokumen_files';
    protected $primaryKey = 'id';
    protected $allowedFields = ['dokumen_id', 'file', 'created_at'];
}
