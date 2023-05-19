<?php

namespace App\Models;

use CodeIgniter\Model;

class Doituongts_Model extends Model
{
    protected $table = 'doituongts';
    protected $primaryKey = 'id';
    protected $allowedFields = ['MaDoiTuongTS', 'TenDoiTuongTS'];
    
}