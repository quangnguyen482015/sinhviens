<?php

namespace App\Models;

use CodeIgniter\Model;

class DanToc_Model extends Model
{
    protected $table = 'dantoc';
    protected $primaryKey = 'id';
    protected $allowedFields = ['MaDanToc', 'TenDanToc'];
    
}