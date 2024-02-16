<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Pager\Pager;
use CodeIgniter\Database\Query;

class GalleryModel extends Model
{
	protected $table = 'gallery';
	protected $primaryKey = 'id';
	protected $allowedFields = ['nama', 'deskripsi', 'keyword', 'date_kegiatan', 'lokasi', 'user_id', 'kategori_id', 'status', 'slug', 'date_create', 'thumbnail'];

	public function getAllGalleries()
	{
		return $this->db->table('gallery')
			->select('gallery.*, user.username, mst_kategori.nama as nama_kategori')
			->join('user', 'user.id = gallery.user_id')
			->join('mst_kategori', 'mst_kategori.id = gallery.kategori_id')
			->orderBy('date_create', 'desc')
			->get();
	}
	
	public function getAllGalleriesWithPagination($post_category_id = null, $category_is_published = 1, $post_is_published = 1, $articles_per_page =6 )
	{
		$query = $this->db->table('gallery')
			->select('gallery.*, user.username, mst_kategori.nama as nama_kategori')
			->join('user', 'user.id = gallery.user_id')
			->join('mst_kategori', 'mst_kategori.id = gallery.kategori_id')
			->orderBy('date_create', 'desc')
			->paginate($articles_per_page, 'bootstrap');
	
		// Mengembalikan objek Pager dengan data pagination
		return $query;
	}
	
	
}
