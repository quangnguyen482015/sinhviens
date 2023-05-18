<?php

namespace App\Models;

use CodeIgniter\Model;

class Huyen_Model extends Model
{
    protected $table = 'huyen';
    protected $primaryKey = 'id';
    protected $allowedFields = ['MaHuyen', 'TenHuyen','MaTinh'];
    
}