<?php

namespace App\Models;

use CodeIgniter\Model;

class YoutubeModel extends Model
{
    protected $table = 'youtube';
    protected $primaryKey = 'id';
    protected $allowedFields = ['gambar', 'judul', 'link', 'keterangan', 'date_create'];

}