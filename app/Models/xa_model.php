<?php

namespace App\Models;

use CodeIgniter\Model;

class Xa_Model extends Model
{
    protected $table = 'xa';
    protected $primaryKey = 'id';
    protected $allowedFields = ['MaXa','TenXa', 'MaHuyen', 'MaTinh',];
}