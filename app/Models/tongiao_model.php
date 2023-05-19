<?php

namespace App\Models;

use CodeIgniter\Model;

class TonGiao_Model extends Model
{
    protected $table = 'tongiao';
    protected $primaryKey = 'id';
    protected $allowedFields = ['MaTonGiao', 'TenTonGiao'];
    
}