<?php

namespace App\Models;

use CodeIgniter\Model;

class Kwitansimodel extends Model
{
    protected $table            = 'kwitansi';
    protected $primaryKey       = 'no_kwitansi';
    protected $returnType       = 'object';
    protected $allowedFields    = ['upload_kwitansi', 'status'];
}
