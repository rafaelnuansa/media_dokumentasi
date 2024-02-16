<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\FilesMitraModel;
use App\Models\GambarFilesMitraModel;

class FilesMitra extends BaseController
{
    protected $session;
    protected $gambarProdukModel;

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->gambarFilesModel = new GambarFilesMitraModel();
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $userSudahLogin = $this->session->has('isLogin');
        
        $produkModel = new FilesMitraModel();
    
        $data['produk'] = $produkModel->findAll();
        $produkPopuler['produk'] = $produkModel->where('status', 'Aktif')->findAll();
        $data['gambar_produk'] = $this->gambarFilesModel->findAll();
        $data['files'] = $produkModel->where('status', 'Aktif')->findAll();

        $settings = $this->getSettingsData();
    
        $data = [
            'userSudahLogin' => $userSudahLogin,
            'web_logo' => $settings['web_logo'],
            'web_icon' => $settings['web_icon'],
            'web_title' => $settings['web_title'],
            'web_author' => $settings['web_author'],
            'web_description' => $settings['web_description'],
            'web_keywords' => $settings['web_keywords'],
            'produk_data' => $data['produk'],
            'files_data' => $data['files'],
            'produk_populer' => $produkPopuler['produk'],
            'gambar_produk' => $data['gambar_produk'],
            'gambarProdukModel' => $this->gambarFilesModel,
        ];
         //print_r($data); die;

        return view('files-mitra', $data);
    }
    
    public function detail($slug)
    {
        $userSudahLogin = $this->session->has('isLogin');
        
        $produkModel = new FilesMitraModel();
        $gambarProdukModel = new GambarFilesMitraModel();
    
        $produk = $produkModel->where('slug', $slug)->first();
    
        if (!$produk) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    
        $gambar_produk = $gambarProdukModel->where('files_id', $produk['files_id'])->findAll();
    
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
            'gambarProdukModel' => $gambarProdukModel,
        ];
    
        return view('detail-files-mitra', $data);
    }

      public function download($id)
    {
        $file_to_download = './public/img/files_mitra/'.$id;
        $client_file = './public/img/files_mitra/'.$id;

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