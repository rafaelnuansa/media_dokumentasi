<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\SettingsWebModel;

abstract class BaseController extends Controller
{
    protected $settingsWebModel;

    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {

        parent::initController($request, $response, $logger);
        
        $this->settingsWebModel = new SettingsWebModel();
    }

    protected function getSettingsData()
    {
        return $this->settingsWebModel->first();
    }
}