<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Home extends BaseController
{
    protected $session;
    
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->userModel = new UserModel();
    }
    
    public function index()
    {
        $userSudahLogin = $this->session->has('isLogin');
        
        $username = '';
    
        if ($userSudahLogin) {
            $username = $this->session->get('username');
        }
    
        $user = $this->userModel->where('username', $username)->first();
        
        $settings = $this->getSettingsData();
    
        $data = [
            'userSudahLogin' => $userSudahLogin,
            'username' => $username,
            'web_logo' => $settings['web_logo'],
            'web_icon' => $settings['web_icon'],
            'web_title' => $settings['web_title'],
            'web_author' => $settings['web_author'],
            'web_description' => $settings['web_description'],
            'web_keywords' => $settings['web_keywords'],
        ];
        
        return view('index', $data);
    }
    
}