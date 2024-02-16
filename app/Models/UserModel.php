<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "user";
    protected $primaryKey = "id";
    protected $allowedFields = ["username", "email", "no_whatsapp", "password", "role", "date_create"];
    protected $useTimestamps = false;
    
    public function getTotalUsers()
    {
        return $this->countAll();
    }
    
    public function getTotalUsersToday()
    {
        $today = date('Y-m-d');
        return $this->where('DATE(date_create)', $today)->countAllResults();
    }
    
    public function updateUserPassword($userId, $newPassword)
    {
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
    
        $data = [
            'password' => $hashedPassword,
        ];
    
        $result = $this->update($userId, $data);
    
        if (!$result) {
            throw new \RuntimeException('Gagal memperbarui password.');
        }
    }
    
}