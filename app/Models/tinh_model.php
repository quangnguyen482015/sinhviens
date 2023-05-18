<?php

namespace App\Models;

use CodeIgniter\Model;

class Tinh_Model extends Model
{
    protected $table = 'tinh';
    protected $primaryKey = 'id';
    protected $allowedFields = ['MaTinh', 'TenTinh'];
}