<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\DokumenFileModel;
use App\Models\DokumenModel;
use CodeIgniter\HTTP\RequestInterface;

class DokumenController extends BaseController
{
	public function index()
	{
		$model = new DokumenModel();
		$data = [
			'dokumen' => $model->paginate(10),
			'pager'   => $model->pager
		];
		return view('admin/dokumen/index', $data);
	}

	public function create()
	{
		return view('admin/dokumen/create');
	}

	public function store()
	{
		$model = new DokumenModel();

		$thumbnail = $this->request->getFile('thumbnail');
		$thumbName = $thumbnail->getRandomName();
		$thumbnail->move('img/dokumen', $thumbName);

		$data = [
			'nama'       => $this->request->getPost('nama'),
			'deskripsi'  => $this->request->getPost('deskripsi'),
			'keyword'    => $this->request->getPost('keyword'),
			'thumbnail'  => $thumbName,
			'slug'       => url_title($this->request->getPost('nama'), '-', true),
			'created_at' => date('Y-m-d H:i:s')
		];

		$model->insert($data);

		return redirect()->to('/admin/dokumen')->with('success', 'Dokumen berhasil ditambahkan.');
	}

	public function edit($id)
	{
		$model = new DokumenModel();
		$data['dokumen'] = $model->find($id);
		return view('admin/dokumen/edit', $data);
	}

	public function update($id)
	{
		// Set validation rules
		$validationRules = [
			'nama' => 'required',
			'deskripsi' => 'required',
			'keyword' => 'required',
			'thumbnail' => 'mime_in[thumbnail,image/jpeg,image/png,image/webp]|max_size[thumbnail,4096]', // Adjust max size as needed

		];

		// Validate the request
		if (!$this->validate($validationRules)) {
			return redirect()->back()->withInput()->with('error', $this->validator->getErrors());
		}
		$model = new DokumenModel();

		$thumbnail = $this->request->getFile('thumbnail');
		if ($thumbnail->isValid()) {
			$thumbName = $thumbnail->getRandomName();
			$thumbnail->move('img/dokumen', $thumbName);
		} else {
			$thumbName = $this->request->getPost('old_thumbnail');
		}

		$data = [
			'nama'       => $this->request->getPost('nama'),
			'deskripsi'  => $this->request->getPost('deskripsi'),
			'keyword'    => $this->request->getPost('keyword'),
			'thumbnail'  => $thumbName,
			'slug'       => url_title($this->request->getPost('nama'), '-', true),
			'updated_at' => date('Y-m-d H:i:s')
		];

		$model->update($id, $data);

		return redirect()->to('/admin/dokumen')->with('success', 'Dokumen berhasil diperbarui.');
	}

	public function delete($id)
	{
		$dokumenModel = new DokumenModel();
		$dokumen = $dokumenModel->find($id);

		if (!$dokumen) {
			return redirect()->back()->with('error', 'Dokumen tidak ditemukan.');
		}

		// Hapus file thumbnail
		if (file_exists(FCPATH . 'img/dokumen/' . $dokumen['thumbnail'])) {
			unlink(FCPATH . 'img/dokumen/' . $dokumen['thumbnail']);
		}

		// Hapus semua file terkait dengan dokumen
		$dokumenFileModel = new DokumenFileModel();
		$dokumenFileModel->where('dokumen_id', $id)->delete();

		// Hapus dokumen dari database
		$dokumenModel->delete($id);

		return redirect()->to('/admin/dokumen')->with('success', 'Dokumen berhasil dihapus.');
	}

	public function show($id)
	{
		$dokumenModel = new DokumenModel();
		$dokumen = $dokumenModel->find($id);

		if (!$dokumen) {
			return redirect()->to('/admin/dokumen')->with('error', 'Dokumen tidak ditemukan.');
		}

		// Mendapatkan file dokumen terkait dari database
		$dokumenFileModel = new DokumenFileModel();
		$dokumenFiles = $dokumenFileModel->where('dokumen_id', $id)->findAll();

		$data = [
			'dokumen' => $dokumen,
			'dokumenFiles' => $dokumenFiles // Menambahkan data file dokumen ke dalam array data yang akan dikirimkan ke view
		];

		return view('admin/dokumen/show', $data);
	}

	public function addFileDokumen($dokumen_id)
	{
		// Mendapatkan data dokumen berdasarkan ID
		$dokumenModel = new DokumenModel();
		$dokumen = $dokumenModel->find($dokumen_id);

		if (!$dokumen) {
			// Dokumen tidak ditemukan, kembalikan pesan error
			return redirect()->back()->with('error', 'Dokumen tidak ditemukan.');
		}

		// Proses upload multiple file
		$files = $this->request->getFileMultiple('file');
		foreach ($files as $file) {
			// Mengecek tipe MIME file
			$allowedMimeTypes = ['application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/msword', 'application/vnd.ms-excel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/pdf', 'application/vnd.ms-powerpoint', 'application/vnd.openxmlformats-officedocument.presentationml.presentation'];
			if (!$file->isValid() || !in_array($file->getClientMimeType(), $allowedMimeTypes)) {
				return redirect()->back()->with('error', 'File tidak valid. Harap unggah file Excel, Word, PDF, PowerPoint, atau dokumen lainnya.');
			}

			// Generate unique file name
			$fileName = $file->getRandomName();
			$file->move('uploads/', $fileName);

			// Save file data to the database
			$dokumenFileModel = new DokumenFileModel();
			$dokumenFileModel->save([
				'dokumen_id' => $dokumen_id,
				'file' => $fileName,
			]);
		}

		return redirect()->back()->with('success', 'File berhasil ditambahkan ke dokumen.');
	}


	public function deleteFileDokumen($file_id)
	{
		// Cari data file berdasarkan ID
		$dokumenFileModel = new DokumenFileModel();
		$file = $dokumenFileModel->find($file_id);

		if (!$file) {
			// Jika file tidak ditemukan, kembalikan pesan error
			return redirect()->back()->with('error', 'File tidak ditemukan.');
		}


		$filePath = 'uploads/' . $file['file'];
		if (file_exists($filePath)) {
			unlink($filePath);
		}

		// Hapus data file dari database
		$dokumenFileModel->delete($file_id);

		return redirect()->back()->with('success', 'File berhasil dihapus.');
	}


	public function download($id)
	{
		$model = new DokumenModel();
		$fileDok = new DokumenFileModel();

		// Fetch the gallery data from the database
		$dokumen = $model->find($id);

		if (!$dokumen) {
			return redirect()->back()->with('error', 'dokumen not found.');
		}

		// Fetch the images associated with the dokumen
		$files = $fileDok->where('dokumen_id', $id)->findAll();

		// Create a new zip archive
		$zip = new \ZipArchive();

		// Create a temporary zip file path
		$zipFilePath = 'uploads/dokumen_' . $dokumen['id'] . '.zip';

		if ($zip->open($zipFilePath, \ZipArchive::CREATE | \ZipArchive::OVERWRITE) === TRUE) {
			// Add each image file to the zip archive
			foreach ($files as $file) {
				$filePath = 'uploads/' . $file['file'];
				if (file_exists($filePath)) {
					$zip->addFile($filePath, $file['file']);
				}
			}
			// Close the zip archive
			$zip->close();

			// Set the appropriate headers for file download
			header('Content-Type: application/zip');
			header('Content-Disposition: attachment; filename="' . basename($zipFilePath) . '"');
			header('Content-Length: ' . filesize($zipFilePath));
			readfile($zipFilePath);

			// Delete the temporary zip file
			unlink($zipFilePath);

			// Terminate the script after file download
			exit();
		} else {
			return redirect()->back()->with('error', 'Failed to create zip archive.');
		}
	}
}
