<?php

namespace App\Models;

use CodeIgniter\Model;

class DashboardModel extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'user_id', 'order_id', 'nama_produk', 'harga_produk', 'username', 'email', 'no_whatsapp',
        'status_byuser', 'status_byadmin', 'status_pembayaran',
        'bukti_pembayaran', 'status_pembelian', 'note_user', 'note_admin', 'date_create'
    ];

    public function getTotalUpload()
    {
        $today = date('Y-m-d');

        $builder = $this->db->table('files');
        $builder->selectCount('id', 'total_upload');
        $builder->where('DATE(date_create)', $today);

        $result = $builder->get()->getRow();

        $totalSuccessOrders = $result->total_success_orders;

        return $totalSuccessOrders;
    }
    
    public function getTotalSuccessOrders()
    {
        $builder = $this->db->table('orders');
        $builder->selectCount('id', 'total_success_orders');
        $builder->where('status_pembelian', 'Sukses');
    
        $result = $builder->get()->getRow();
    
        $totalSuccessOrders = $result->total_success_orders;
    
        return $totalSuccessOrders;
    }
    
    public function getTotalPendingOrdersToday()
    {
        $today = date('Y-m-d');

        $builder = $this->db->table('orders');
        $builder->selectCount('id', 'total_pending_orders');
        $builder->where('status_pembelian', 'Pending');
        $builder->where('DATE(date_create)', $today);

        $result = $builder->get()->getRow();

        $totalPendingOrders = $result->total_pending_orders;

        return $totalPendingOrders;
    }
    
    public function getTotalPendingOrders()
    {
        $builder = $this->db->table('orders');
        $builder->selectCount('id', 'total_pending_orders');
        $builder->where('status_pembelian', 'Pending');
    
        $result = $builder->get()->getRow();
    
        $totalPendingOrders = $result->total_pending_orders;
    
        return $totalPendingOrders;
    }
    
    public function getTotalProsesOrdersToday()
    {
        $today = date('Y-m-d');

        $builder = $this->db->table('orders');
        $builder->selectCount('id', 'total_proses_orders');
        $builder->where('status_pembelian', 'Diproses');
        $builder->where('DATE(date_create)', $today);

        $result = $builder->get()->getRow();

        $totalProsesOrders = $result->total_proses_orders;

        return $totalProsesOrders;
    }
    
    public function getTotalProsesOrders()
    {
        $builder = $this->db->table('orders');
        $builder->selectCount('id', 'total_proses_orders');
        $builder->where('status_pembelian', 'Diproses');
    
        $result = $builder->get()->getRow();
    
        $totalProsesOrders = $result->total_proses_orders;
    
        return $totalProsesOrders;
    }
    
    public function getTotalRevenueSuccessOrdersToday()
    {
        return $this->selectSum('harga_produk', 'totalRevenue')
                    ->where('status_pembelian', 'Sukses')
                    ->where('DATE(date_create)', date('Y-m-d'))
                    ->get()
                    ->getRow()
                    ->totalRevenue;
    }
    
    public function getTotalRevenueSuccessOrders()
        {
            return $this->selectSum('harga_produk', 'totalRevenue')
                        ->where('status_pembelian', 'Sukses')
                        ->get()
                        ->getRow()
                        ->totalRevenue;
        }

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;
}