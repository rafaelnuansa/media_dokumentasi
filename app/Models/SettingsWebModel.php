<?php

namespace App\Models;

use CodeIgniter\Model;

class SettingsWebModel extends Model
{
    protected $table = 'settings_web';
    protected $primaryKey = 'id';
    protected $allowedFields = ['web_title', 'web_icon', 'web_logo', 'web_author', 'web_keywords', 'web_description', 'wa_admin', 'wa_apikey'];

    protected $useAutoIncrement = true;
    
    public function getSettings()
    {
        return $this->first();
    }

}