<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    protected $userModel;
    protected $validation;
    protected $session;

    public function __construct()
    {
        $this->UserModel = new UserModel();
        $this->validation = \Config\Services::validation();
        $this->session = \Config\Services::session();
    }

    public function login()
    {
      $userSudahLogin = $this->session->has('isLogin');
      
      $settings = $this->getSettingsData();
    
        $data = [
            'userSudahLogin' => $userSudahLogin,
            'web_logo' => $settings['web_logo'],
            'web_icon' => $settings['web_icon'],
            'web_title' => $settings['web_title'],
            'web_author' => $settings['web_author'],
            'web_description' => $settings['web_description'],
            'web_keywords' => $settings['web_keywords'],
        ];
        
        return view('auth/login', $data);
    }

    public function register()
    {
      $userSudahLogin = $this->session->has('isLogin');
      
      $settings = $this->getSettingsData();
    
        $data = [
            'userSudahLogin' => $userSudahLogin,
            'web_logo' => $settings['web_logo'],
            'web_icon' => $settings['web_icon'],
            'web_title' => $settings['web_title'],
            'web_author' => $settings['web_author'],
            'web_description' => $settings['web_description'],
            'web_keywords' => $settings['web_keywords'],
        ];
        return view('auth/register', $data);
    }

    public function valid_register()
    {
        $data = $this->request->getPost();
        
        $this->validation->run($data, 'register');
        
        $errors = $this->validation->getErrors();
    
        if ($errors) {
            session()->setFlashdata('error', $errors);
            return redirect()->to('/auth/register');
        }
    
        $hashedPassword = password_hash($data['password'], PASSWORD_BCRYPT);
    
        $this->UserModel->save([
            'username' => $data['username'],
            'email' => $data['email'],
            'no_whatsapp' => $data['no_whatsapp'],
            'password' => $hashedPassword,
            'role' => 2,
            'date_create' => date('Y-m-d H:i:s')
        ]);
    
        session()->setFlashdata('login', 'Anda berhasil mendaftar, silahkan login');
        return redirect()->to('/auth/login');
    }

    public function valid_login()
    {
        $data = $this->request->getPost();
    
        $user = $this->UserModel->where('username', $data['username'])->first();
    
      if ($user) {
          if (password_verify($data['password'], $user['password'])) {
              $sessLogin = [
                  'isLogin' => true,
                  'username' => $user['username'],
                  'role' => $user['role']
              ];
              $this->session->set($sessLogin);
      
              if ($user['role'] == 1) {
                  return redirect()->to('/admin/');
              } else {
                  return redirect()->to('/');
              }
          } else {
              session()->setFlashdata('password', 'Password salah');
              return redirect()->to('/auth/login');
          }
      } else {
          session()->setFlashdata('username', 'Username tidak ditemukan');
          return redirect()->to('/auth/login');
      }
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('/auth/login');
    }
}