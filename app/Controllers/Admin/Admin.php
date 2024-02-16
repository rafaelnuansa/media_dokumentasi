<?php

namespace App\Controllers\Admin;

use App\Models\UserModel;
use App\Models\HistoriModel;
use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->session = session();
        $this->userModel = new UserModel();
    }

    public function index()
    {
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        if ($this->session->get('role') != 1) {
            return redirect()->to('/');
        }
        $settings = $this->getSettingsData();
        $userSudahLogin = $this->session->has('isLogin');

        $totalSuccessOrdersToday = '0';//$this->ordersModel->getTotalSuccessOrdersToday();
        $totalSuccessOrders = '0';//$this->ordersModel->getTotalSuccessOrders();

        $totalPendingOrdersToday = '0';//$this->ordersModel->getTotalPendingOrdersToday();
        $totalPendingOrders = '0';//$this->ordersModel->getTotalPendingOrders();

        $totalProsesOrdersToday = '0';//$this->ordersModel->getTotalProsesOrdersToday();
        $totalProsesOrders = '0';//$this->ordersModel->getTotalProsesOrders();

        $totalRevenueSuccessOrdersToday = '0';//$this->ordersModel->getTotalRevenueSuccessOrdersToday();
        $totalRevenueSuccessOrders = '0';//$this->ordersModel->getTotalRevenueSuccessOrders();

        $userModel = new UserModel();
        $HistoriModel = new HistoriModel();
        $totalUsers = $userModel->getTotalUsers();

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
            'totalSuccessOrdersToday' => $totalSuccessOrdersToday,
            'totalSuccessOrders' => $totalSuccessOrders,                     
            'totalPendingOrdersToday' => $totalPendingOrdersToday,
            'totalPendingOrders' => $totalPendingOrders,
            'totalProsesOrdersToday' => $totalProsesOrdersToday,
            'totalProsesOrders' => $totalProsesOrders,
            'totalRevenueSuccessOrdersToday' => $totalRevenueSuccessOrdersToday,
            'totalRevenueSuccessOrders' => $totalRevenueSuccessOrders,
            'totalUsers' => $totalUsers,
        ];

        return view('admin/index', $data);
    }
}