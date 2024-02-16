<?php

namespace App\Controllers\Admin;

use App\Models\FilesModel;
use App\Models\HistoriModel;
use App\Models\GambarFilesModel;
use CodeIgniter\HTTP\Session\Session;
use App\Controllers\BaseController;

class Files extends BaseController
{
  protected $session;
  
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->gambarFilesModel = new GambarFilesModel();
    }
    
    public function index()
    {
      if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }
        
      if ($this->session->get('role') != 1) {
            return redirect()->to('/');
        }

        $FilesModel = new FilesModel();
        $HistoriModel = new HistoriModel();
        $gambarFilesModel = new GambarFilesModel();
        $settings = $this->getSettingsData();
        $userSudahLogin = $this->session->has('isLogin');

        $data['files'] = $FilesModel->findAll();
        $data['files_histori'] = $HistoriModel->findAll();
        $data['files_gambar'] = $gambarFilesModel->findAll();

        $data = [
            'userSudahLogin' => $userSudahLogin,
            'web_logo' => $settings['web_logo'],
            'web_icon' => $settings['web_icon'],
            'web_title' => $settings['web_title'],
            'web_author' => $settings['web_author'],
            'web_description' => $settings['web_description'],
            'web_keywords' => $settings['web_keywords'],
            'files' => $data['files'],
            'files_histori' => $data['files_histori'],
            'files_gambar' => $data['files_gambar'],
            'gambarFilesModel' => $this->gambarFilesModel,
        ];
    
        return view('admin/files/index_new', $data);
    }

     public function detail($slug)
    {
        $userSudahLogin = $this->session->has('isLogin');

        $FilesModel = new FilesModel();
        $gambarFilesModel = new GambarFilesModel();

        $produk = $FilesModel->where('slug', $slug)->first();

        if (!$produk) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $gambar_produk = $gambarFilesModel->where('files_id', $produk['files_id'])->findAll();

        $settings = $this->getSettingsData();

        $data = [
            'userSudahLogin' => $userSudahLogin,
            'web_logo' => $settings['web_logo'],
            'web_icon' => $settings['web_icon'],
            'web_title' => $settings['web_title'],
            'web_author' => $settings['web_author'],
            'web_description' => $settings['web_description'],
            'web_keywords' => $settings['web_keywords'],
            'produk_data' => $produk,
            'gambar_produk' => $gambar_produk,
            'gambarProdukModel' => $gambarFilesModel,
        ];

        return view('admin/files/detail', $data);
    }

    public function create()
    {
        $settings = $this->getSettingsData();
        $userSudahLogin = $this->session->has('isLogin');
        $HistoriModel = new HistoriModel();

        $data['files_histori'] = $HistoriModel->findAll();

        $data = [
            'userSudahLogin' => $userSudahLogin,
            'web_logo' => $settings['web_logo'],
            'web_icon' => $settings['web_icon'],
            'web_title' => $settings['web_title'],
            'web_author' => $settings['web_author'],
            'web_description' => $settings['web_description'],
            'web_keywords' => $settings['web_keywords'],
            'files_histori' => $data['files_histori'],

        ];

        return view('admin/files/create', $data);
    }

    public function store()
    {
        $filesModel = new FilesModel();
        $gambarFilesModel = new GambarFilesModel();
    
        $nama_files = $this->request->getPost('nama');
        $slug = $this->createSlug($nama_files);
        $status = $this->request->getPost('status');
        if($status == 'on')
              {
                   $status_publish= 'Y';
                }else{
                    $status_publish = 'N';
                }
        $dataFiles = [
            'nama' => $nama_files,
            'slug' => $slug,
            'deskripsi' => $this->request->getPost('deskripsi'),
            'fotografer' => $this->request->getPost('fotografer'),
            'kategori' => $this->request->getPost('kategori'),
            'status' => $status_publish,
            'keyword' => $this->request->getPost('keyword'),
            'date_create' => date('Y-m-d H:i:s'),
            'date_kegiatan' => date('Y-m-d',strtotime($this->request->getPost('tanggal_kegiatan'))),
        ];

        $filesId = $filesModel->insert($dataFiles);
    
        $gambarData = [];
        $gambarFiles = $this->request->getFiles('gambar');

        foreach ($gambarFiles as $gambar) {
            foreach ($gambar as $file) {
                if ($file->isValid() && !$file->hasMoved()) {
                    $newName = $file->getRandomName();
                    $file->move('./public/img/files/', $newName);
    
                    $gambarData[] = [
                        'files_id' => $filesId,
                        'url_gambar' => 'public/img/files/' . $newName,
                        'files_alias' => $newName,
                    ];
                }
            }
        }
    
        if (!empty($gambarData)) {
            $gambarFilesModel->insertBatch($gambarData);
        }
    
        $this->session->setFlashdata('success', 'Galeri berhasil ditambahkan.');
    
        return redirect()->to('admin/files/');
    }
        
    private function createSlug($nama_files)
    {
        $slug = url_title($nama_files, '-', true);
        $filesModel = new FilesModel();
    
        $suffix = '';
        $counter = 1;
    
        while ($filesModel->where('slug', $slug . $suffix)->first() !== null) {
            $suffix = '-' . $counter;
            $counter++;
        }
    
        return $slug . $suffix;
    }

    public function update($id)
    {
        $filesModel = new FilesModel();
        $gambarFilesModel = new GambarFilesModel();
    
        $dataFiles = [
            'nama' => $this->request->getPost('nama'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'fotografer' => $this->request->getPost('fotografer'),
            'kategori' => $this->request->getPost('kategori'),
            'keyword' => $this->request->getPost('keyword'),
            //'status' => $this->request->getPost('status'),
            'date_kegiatan' => date('Y-m-d',strtotime($this->request->getPost('tanggal_kegiatan'))),
        ];

        $filesModel->update($id, $dataFiles);

        $gambarLama = $gambarFilesModel->where('files_id', $id)->findAll();

        foreach ($gambarLama as $gambar) {
            $path = $gambar->url_gambar;
            if (file_exists($path)) {
                unlink($path);
            }
        }
        $gambarFilesModel->where('files_id', $id)->delete();
    
        $gambarData = [];
        $gambarFiles = $this->request->getFiles('gambar');
        
        foreach ($gambarFiles as $gambar) {
            if (is_array($gambar)) {
                foreach ($gambar as $file) {
                    if ($file->isValid() && !$file->hasMoved()) {
                        $newName = $file->getRandomName();
                        $file->move('./public/img/files/', $newName);
        
                        $gambarData[] = [
                            'files_id' => $id,
                            'url_gambar' => 'public/img/files/' . $newName,
                            'files_alias' => $newName,
                        ];
                    }
                }
            } else {
                if ($gambar->isValid() && !$gambar->hasMoved()) {
                    $newName = $gambar->getRandomName();
                    $gambar->move('./public/img/files/', $newName);
        
                    $gambarData[] = [
                        'files_id' => $id,
                        'url_gambar' => 'public/img/files/' . $newName,
                        'files_alias' => $newName,
                    ];
                }
            }
        }
    
        if (!empty($gambarData)) {
            $gambarFilesModel->insertBatch($gambarData);
        }
    
        $this->session->setFlashdata('success', 'Files berhasil diperbarui.');

        return redirect()->to('admin/files/');
    }

    public function delete($id)
    {
        $filesModel = new FilesModel();
        $gambarFilesModel = new GambarFilesModel();

        $filesModel->delete($id);

        $gambarFilesModel->where('files_id', $id)->delete();

        $this->session->setFlashdata('success', 'Galeri berhasil dihapus.');

        return redirect()->to('admin/files/');
    }

    public function publish($id)
    {
        $filesModel = new FilesModel();

        $dataFiles = [
            'status' => 'N',
        ];

        $filesModel->update($id, $dataFiles);


       $this->session->setFlashdata('success', 'Galeri berhasil diperbarui.');

        return redirect()->to('admin/files/');
    }

    public function unpublish($id)
    {
        $filesModel = new FilesModel();

        $dataFiles = [
            'status' => 'Y',
        ];

        $filesModel->update($id, $dataFiles);


       $this->session->setFlashdata('success', 'Galeri berhasil diperbarui.');

        return redirect()->to('admin/files/');
    }

     public function download($id)
    {
        $file_to_download = './public/img/files/'.$id;
        $client_file = './public/img/files/'.$id;

        $download_rate = 200; // 200Kb/s

        $f = null;

        try {
        	if (!file_exists($file_to_download)) {
        		throw new Exception('File ' . $file_to_download . ' does not exist');
        	}

        	if (!is_file($file_to_download)) {
        		throw new Exception('File ' . $file_to_download . ' is not valid');
        	}

        	header('Cache-control: private');
        	header('Content-Type: application/octet-stream');
        	header('Content-Length: ' . filesize($file_to_download));
        	header('Content-Disposition: filename=' . $client_file);

        	// flush the content to the web browser
        	flush();

        	$f = fopen($file_to_download, 'r');

        	while (!feof($f)) {
        		// send the file part to the web browser
        		print fread($f, round($download_rate * 1024));

        		// flush the content to the web browser
        		flush();

        		// sleep one second
        		sleep(1);
        	}
        } catch (\Throwable $e) {
        	echo $e->getMessage();
        } finally {
        	if ($f) {
        		fclose($f);
        	}
        }
    }

}