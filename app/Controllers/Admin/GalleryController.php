<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\CategoryModel;
use App\Models\GalleryImageModel;
use App\Models\GalleryModel;
use App\Models\UserModel;

class GalleryController extends BaseController
{
	public function index()
	{
		$model = new GalleryModel();

		// Mendapatkan data galeri dengan pagination
		$galleries = $model->getWithRelations(10);

		// Mengambil pager dari model
		$pager = $galleries;
		$data = [
			'galleries' => $galleries,
			'pager' => $pager,
		];

		return view('admin/gallery/index', $data);
	}



	public function create()
	{
		$userModel = new UserModel();
		$categoryModel = new CategoryModel();

		$data['users'] = $userModel->findAll();
		$data['categories'] = $categoryModel->findAll();

		return view('admin/gallery/create', $data);
	}

	public function store()
	{
		try {
			helper(['form', 'url']);
			$model = new GalleryModel();
			$imageModel = new GalleryImageModel(); // Model untuk tabel gallery_image

			// Validasi input
			$validation =  \Config\Services::validation();
			$validation->setRules([
				'nama' => 'required',
				'deskripsi' => 'required',
				'keyword' => 'required',
				'date_kegiatan' => 'required|valid_date',
				'lokasi' => 'required',
				'user_id' => 'required|integer',
				'kategori_id' => 'required|integer',
				'status' => 'required',
				'thumbnail' => [
					'rules' => 'uploaded[thumbnail]|max_size[thumbnail,1024]|mime_in[thumbnail,image/jpg,image/jpeg,image/svg,image/webp,image/png]|is_image[thumbnail]',
					'errors' => [
						'uploaded' => 'Preview image is required! Please choose an image first!',
						'max_size' => 'The size of this image is too large. The image must have less than 1MB size',
						'mime_in' => 'Your upload does not have a valid image format',
						'is_image' => 'Your file is not allowed! Please use an image!'
					]
				],
				'image' => [
					'rules' => 'max_size[image,2048]|is_image[image]|mime_in[image,image/jpeg,image/jpg,image/png,image/webp]',
				]
			]);

			if (!$validation->withRequest($this->request)->run()) {
				return redirect()->to('admin/gallery/create')->withInput()->with('errors', $validation->getErrors());
			}


			$images = $this->request->getFileMultiple('image');
			$thumbnail = $this->request->getFile('thumbnail');
			$thumbName = $thumbnail->getRandomName();
			// moving
			$thumbnail->move('img/files_mitra', $thumbName);
			// Membuat slug dari nama galeri
			$slug = url_title($this->request->getPost('nama'), '-', true);

			// Simpan data galeri ke dalam database
			$galleryData = [
				'nama' => $this->request->getPost('nama'),
				'deskripsi' => $this->request->getPost('deskripsi'),
				'keyword' => $this->request->getPost('keyword'),
				'date_kegiatan' => $this->request->getPost('date_kegiatan'),
				'lokasi' => $this->request->getPost('lokasi'),
				'user_id' => $this->request->getPost('user_id'),
				'kategori_id' => $this->request->getPost('kategori_id'),
				'status' => $this->request->getPost('status'),
				'thumbnail' => $thumbName,
				'slug' => $slug,
			];

			$model->transStart(); // Mulai transaksi database

			$galleryId = $model->insert($galleryData);
			// Path untuk menyimpan gambar

			// Simpan gambar ke dalam direktori dan tambahkan record ke dalam tabel gallery_image
			foreach ($images as $image) {
				if ($image->isValid() && !$image->hasMoved()) {
					$imageName = $image->getRandomName();
					$image->move('img/files_mitra/', $imageName);

					// Simpan record gambar ke dalam database
					$imageData = [
						'gallery_id' => $galleryId,
						'image' => $imageName,
					];
					$imageModel->insert($imageData);
				}
			}

			$model->transComplete(); // Selesai transaksi database

			return redirect()->to('/admin/gallery')->with('success', 'Galeri berhasil ditambahkan.');
		} catch (\Exception $e) {
			// Tangani pengecualian
			return redirect()->back()->withInput()->with('errors', $e->getMessage());
		}
	}


	public function edit($id)
	{
		$model = new GalleryModel();
		$imageModel = new GalleryImageModel();
		$categoryModel = new CategoryModel();
		$userModel = new UserModel();

		$data['categories'] = $categoryModel->findAll();
		$data['users'] = $userModel->findAll();
		$data['gallery'] = $model->find($id);
		if ($data['gallery'] === null) {
			return redirect()->to('/admin/gallery')->with('errors', 'Galeri tidak ditemukan.');
		}
		// Ambil data gambar berdasarkan ID galeri
		$data['images'] = $imageModel->where('gallery_id', $id)->findAll();


		return view('admin/gallery/edit', $data);
	}

	public function show($id)
	{
		$model = new GalleryModel();
		$imageModel = new GalleryImageModel();

		// Ambil data galeri dari database
		$gallery = $model->find($id);

		if ($gallery) {
			// Ambil gambar-gambar terkait dengan galeri
			$images = $imageModel->where('gallery_id', $id)->findAll();

			return view('admin/gallery/show', ['gallery' => $gallery, 'images' => $images]);
		} else {
			return redirect()->to('/admin/gallery')->with('errors', 'Galeri tidak ditemukan.');
		}
	}


	public function update($id)
	{
		try {
			helper(['form', 'url']);
			$model = new GalleryModel();

			// Validasi input
			$validation =  \Config\Services::validation();
			$validation->setRules([
				'nama' => 'required',
				'deskripsi' => 'required',
				'keyword' => 'required',
				'date_kegiatan' => 'required|valid_date',
				'lokasi' => 'required',
				'user_id' => 'required|integer',
				'kategori_id' => 'required|integer',
				'status' => 'required',
				'thumbnail' => 'is_image[thumbnail]|mime_in[thumbnail,image/jpeg,image/jpg,image/png,image/webp]',
				'image' => [
					'rules' => 'max_size[image,1024]|is_image[image]|mime_in[image,image/jpeg,image/jpg,image/png,image/webp]',
				]
			]);

			if (!$validation->withRequest($this->request)->run()) {
				return redirect()->to('/admin/gallery/edit/' . $id)->withInput()->with('errors', $validation->getErrors());
			}

			// Ambil data galeri dari database
			$gallery = $model->find($id);

			// Ambil file thumbnail jika diisi
			$thumbnail = $this->request->getFile('thumbnail');
			if ($thumbnail->isValid() && !$thumbnail->hasMoved()) {
				$thumbName = $thumbnail->getRandomName();
				$thumbnail->move('img/files_mitra', $thumbName);
			} else {
				$thumbName = $gallery['thumbnail']; // Gunakan thumbnail yang sudah ada jika tidak ada perubahan
			}

			// Simpan data galeri ke dalam database
			$galleryData = [
				'nama' => $this->request->getPost('nama'),
				'deskripsi' => $this->request->getPost('deskripsi'),
				'keyword' => $this->request->getPost('keyword'),
				'date_kegiatan' => $this->request->getPost('date_kegiatan'),
				'lokasi' => $this->request->getPost('lokasi'),
				'user_id' => $this->request->getPost('user_id'),
				'kategori_id' => $this->request->getPost('kategori_id'),
				'status' => $this->request->getPost('status'),
				'thumbnail' => $thumbName,
			];

			// Update data galeri ke dalam database
			$model->update($id, $galleryData);

			return redirect()->to('/admin/gallery')->with('success', 'Galeri berhasil diperbarui.');
		} catch (\Exception $e) {
			// Tangani pengecualian
			return redirect()->back()->withInput()->with('error', $e->getMessage());
		}
	}

	public function addImageGallery($gallery_id)
	{
		try {
			$model = new GalleryImageModel();

			// Ambil gambar yang diunggah
			$images = $this->request->getFileMultiple('image');

			// Simpan gambar ke dalam direktori dan tambahkan record ke dalam tabel gallery_image
			foreach ($images as $image) {
				if ($image->isValid() && !$image->hasMoved()) {
					$imageName = $image->getRandomName();
					$image->move('img/files_mitra/', $imageName);

					// Simpan record gambar ke dalam database
					$imageData = [
						'gallery_id' => $gallery_id,
						'image' => $imageName,
					];
					$model->insert($imageData);
				}
			}

			return redirect()->to('/admin/gallery/show/' . $gallery_id)->with('success', 'Gambar berhasil ditambahkan.');
		} catch (\Exception $e) {
			// Tangani pengecualian

			return redirect()->back()->withInput()->with('errors', $e->getMessage());
		}
	}


	public function deleteImageGallery($image_id, $gallery_id)
	{
		try {
			$model = new GalleryImageModel();
			// Ambil data gambar dari database
			$image = $model->find($image_id);
			if ($image) {
				// Hapus gambar dari direktori jika ada
				$imagePath = 'img/files_mitra/' . $image['image'];
				if (file_exists($imagePath)) {
					unlink($imagePath);
				}

				// Hapus data gambar dari database
				$model->delete($image_id);
				return redirect()->to('/admin/gallery/show/' . $gallery_id)->with('success', 'Gambar berhasil dihapus dari galeri.');
			} else {
				return redirect()->to('/admin/gallery/show/' . $gallery_id)->with('error', 'Gambar tidak ditemukan.');
			}
		} catch (\Exception $e) {
			// Tangani pengecualian
			var_dump($e->getMessage());
			die;
			// return redirect()->back()->with('error', $e->getMessage());
		}
	}


	public function delete($id)
	{
		try {
			$model = new GalleryModel();
			$imageModel = new GalleryImageModel();

			// Ambil data galeri dari database
			$gallery = $model->find($id);

			if ($gallery) {
				// Hapus thumbnail jika ada
				if ($gallery['thumbnail']) {
					$thumbnailPath = 'img/files_mitra/' . $gallery['thumbnail'];
					if (file_exists($thumbnailPath)) {
						unlink($thumbnailPath);
					}
				}

				// Hapus gambar-gambar dari galeri jika ada
				$images = $imageModel->where('gallery_id', $id)->findAll();
				if ($images) {
					foreach ($images as $image) {
						$imagePath = 'img/files_mitra/' . $image['image'];
						if (file_exists($imagePath)) {
							unlink($imagePath);
						}
					}
				}

				// Hapus data galeri dari database
				$model->delete($id);

				return redirect()->to('/admin/gallery')->with('success', 'Galeri berhasil dihapus.');
			} else {
				return redirect()->to('/admin/gallery')->with('error', 'Galeri tidak ditemukan.');
			}
		} catch (\Exception $e) {
			// Tangani pengecualian
			return redirect()->back()->with('error', $e->getMessage());
		}
	}
}
