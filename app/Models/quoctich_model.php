<?php

namespace App\Models;

use CodeIgniter\Model;

class Quoctich_Model extends Model
{
    protected $table = 'quocgia';
    protected $primaryKey = 'id';
    protected $allowedFields = ['MaQuocGia', 'TenQuocGia'];
    
}