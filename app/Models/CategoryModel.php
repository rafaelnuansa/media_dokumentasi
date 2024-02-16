<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table = 'mst_kategori';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'code', 'status'];

    // Constructor
    public function __construct()
    {
        parent::__construct();
    }
}
