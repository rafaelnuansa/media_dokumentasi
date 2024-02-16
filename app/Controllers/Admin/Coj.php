<?php

namespace App\Controllers\Admin;

use App\Models\YoutubeModel;
use App\Models\HistoriModel;
use CodeIgniter\HTTP\Session\Session;
use App\Controllers\BaseController;

class Coj extends BaseController
{
    protected $session;
    
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->youtubeModel = new YoutubeModel();
    }

    public function index()
    {
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }
        
        if ($this->session->get('role') != 1) {
            return redirect()->to('/');
        }


        $model = new YoutubeModel();
        $data['youtube'] = $model->findAll();
        $HistoriModel = new HistoriModel();

        $data['files_histori'] = $HistoriModel->findAll();

        $settings = $this->getSettingsData();
        $userSudahLogin = $this->session->has('isLogin');
        $data = [
            'userSudahLogin' => $userSudahLogin,
            'web_logo' => $settings['web_logo'],
            'web_icon' => $settings['web_icon'],
            'web_title' => $settings['web_title'],
            'web_author' => $settings['web_author'],
            'web_description' => $settings['web_description'],
            'web_keywords' => $settings['web_keywords'],
            'youtube' => $data['youtube'] ,
            'files_histori' => $data['files_histori'],

        ];

        // Load view di sini
        return view('admin/youtube/index', $data);
    }

    public function create()
    {
        if ($this->request->getMethod() === 'post') {
            $model = new YoutubeModel();
            $gambar = $this->request->getFile('gambar');

            if ($gambar->isValid() && !$gambar->hasMoved()) {
                $gambar->move(ROOTPATH . 'public/img/youtube/');
                $data = [
                    'gambar' => $gambar->getName(),
                    'judul' => $this->request->getPost('judul'),
                    'keterangan' => $this->request->getPost('keterangan'),
                    'link' => $this->request->getPost('link'),
                    'date_create' => date('Y-m-d H:i:s'),
                ];

                $model->insert($data);

                session()->setFlashdata('success', 'Youtube berhasil ditambahkan.');
            } else {
                session()->setFlashdata('error', 'Gagal mengunggah gambar.');
            }

            return redirect()->to('admin/youtube/');
        }

    }
    
    public function delete($id)
    {
        if ($this->session->get('role') != 1) {
            return redirect()->to('/');
        }
    
        $metode = $this->youtubeModel->find($id);
    
        if ($metode) {
            $gambarPath = ROOTPATH . 'public/img/youtube/' . $metode['gambar'];
            if (file_exists($gambarPath)) {
                unlink($gambarPath);
            }
    
            $this->youtubeModel->delete($id);
    
            session()->setFlashdata('success', 'Youtube berhasil dihapus.');
        } else {
            session()->setFlashdata('error', 'Youtube tidak ditemukan.');
        }
    
        return redirect()->to('admin/youtube/');
    }

}