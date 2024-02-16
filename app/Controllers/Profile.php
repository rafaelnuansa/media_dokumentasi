<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Profile extends BaseController
{
    protected $session;
    protected $userModel;

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->userModel = new UserModel();
    }

public function index()
{

    if (!$this->session->has('isLogin')) {
        return redirect()->to('/auth/login');
    }
    
    $userSudahLogin = $this->session->has('isLogin');

    $username = $this->session->get('username');
    $user = $this->userModel->where('username', $username)->first();
    
    $settings = $this->getSettingsData();

    $userData = [
        'userSudahLogin' => $userSudahLogin,
        'username' => $user['username'],
        'email' => $user['email'],
        'no_whatsapp' => $user['no_whatsapp'],
        'date_create' => $user['date_create'],
        'web_logo' => $settings['web_logo'],
        'web_icon' => $settings['web_icon'],
        'web_title' => $settings['web_title'],
        'web_author' => $settings['web_author'],
        'web_description' => $settings['web_description'],
        'web_keywords' => $settings['web_keywords'],
    ];

    return view('user/profile', $userData);
}

    public function updatePassword()
    {
        $username = $this->session->get('username');
        $user = $this->userModel->where('username', $username)->first();
    
        if (!$this->verifyCurrentPassword($this->request->getPost('current_password'), $user['password'])) {
            $this->session->setFlashdata('error', 'Error: Password saat ini tidak valid.');
            return redirect()->to(base_url('profile'))->withInput();
        }
    
        $validation = \Config\Services::validation();
        $validation->setRules([
            'current_password' => 'required',
            'new_password' => 'required|min_length[6]',
            'confirm_password' => 'required|matches[new_password]',
        ]);
    
        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->to(base_url('profile'))->withInput()->with('errors', $validation->getErrors());
        }
    
        $this->userModel->updateUserPassword($user['id'], $this->request->getPost('new_password'));
    
        $this->session->setFlashdata('success', 'Password berhasil diperbarui.');
        return redirect()->to(base_url('profile'));
    }
    
    private function verifyCurrentPassword($currentPassword, $hashedPassword)
    {
        return password_verify($currentPassword, $hashedPassword);
    }
}