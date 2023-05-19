<?php

namespace App\Models;

use CodeIgniter\Model;

class Doituongdt_Model extends Model
{
    protected $table = 'doituongdt';
    protected $primaryKey = 'id';
    protected $allowedFields = ['MaDoiTuongDT', 'TenDoiTuongDT'];
    
}