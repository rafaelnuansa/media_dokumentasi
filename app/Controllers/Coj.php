<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\FilesModel;
use App\Models\GambarFilesModel;

class Coj extends BaseController
{
    protected $session;
    protected $gambarProdukModel;

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->gambarFilesModel = new GambarFilesModel();
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $userSudahLogin = $this->session->has('isLogin');
        
        $produkModel = new FilesModel();
    
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

        return view('coj', $data);
    }
    
    public function detail($slug)
    {
        $userSudahLogin = $this->session->has('isLogin');
        
        $produkModel = new FilesModel();
        $gambarProdukModel = new GambarFilesModel();
    
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
    
        return view('detail-files', $data);
    }
}