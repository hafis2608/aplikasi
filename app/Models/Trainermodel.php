<?php

namespace App\Models;

use CodeIgniter\Model;

class Trainermodel extends Model
{
    protected $table            = 'trainer';
    protected $primaryKey       = 'id_trainer';
    protected $returnType       = 'object';
    protected $allowedFields    = ['trainer_name', 'no_handphone', 'email'];
}
