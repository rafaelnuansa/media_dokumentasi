<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Pager\Pager;
use CodeIgniter\Database\Query;
use CodeIgniter\HTTP\RequestInterface;

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

	public function getWithRelations($perPage = 10)
	{
		$pager = service('pager');
		$page = (@$_GET['page']) ? $_GET['page'] : 1;
		$this->db->connect();
		$offset = ($page - 1) * $perPage;

		$builder = $this->db->table('gallery');
		$data = $builder
			->select('gallery.*,user.username as username, mst_kategori.nama as nama_kategori')
			->join('user', 'user.id = gallery.user_id')
			->join('mst_kategori', 'mst_kategori.id = gallery.kategori_id')
			->orderBy('gallery.date_create', 'desc')
			->get($perPage, $offset)
			->getResult();
		$total = $builder->countAllResults();

		return [
			'data' => $data,
			'links' => $pager->makeLinks($page, $perPage, $total, 'custom_pager')
		];
	}
}
