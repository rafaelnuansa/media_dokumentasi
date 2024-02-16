<?php

namespace App\Models;

use CodeIgniter\Model;

class GalleryImageModel extends Model
{
    protected $table = 'gallery_image';
    protected $primaryKey = 'id';
    protected $allowedFields = ['gallery_id', 'image', 'is_utama'];

    // Constructor
    public function __construct()
    {
        parent::__construct();
    }
}
