<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\YoutubeModel;

class Video extends BaseController
{
    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->youtubeModel = new YoutubeModel();
    }

    public function index()
    {
        $userSudahLogin = $this->session->has('isLogin');

       $model = new YoutubeModel();
        $data['youtube'] = $model->findAll();

        $settings = $this->getSettingsData();

        $data = [
            'userSudahLogin' => $userSudahLogin,
            'web_logo' => $settings['web_logo'],
            'web_icon' => $settings['web_icon'],
            'web_title' => $settings['web_title'],
            'web_author' => $settings['web_author'],
            'web_description' => $settings['web_description'],
            'web_keywords' => $settings['web_keywords'],
            'youtube' => $data['youtube'] ,
        ];
         //print_r($data); die;

        return view('video', $data);
    }
  
}