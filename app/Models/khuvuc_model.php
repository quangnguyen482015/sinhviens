<?php

namespace App\Models;

use CodeIgniter\Model;

class Khuvuc_Model extends Model
{
    protected $table = 'khuvuc';
    protected $primaryKey = 'id';
    protected $allowedFields = ['MaKhuvuc', 'TenKhuvuc'];
    
}