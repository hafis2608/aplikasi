<?php

namespace App\Models;

use CodeIgniter\Model;

class Kelasmodel extends Model
{
    protected $table            = 'class';
    protected $primaryKey       = 'id_class';
    protected $returnType       = 'object';
    protected $allowedFields    = ['id_member', 'id_trainer', 'class_name', 'startdate', 'enddate', 'status'];

    function getAll()
    {
        $builder = $this->db->table('class');
        $builder->join('member', 'member.id_member = class.id_member');
        $builder->join('trainer', 'trainer.id_trainer = class.id_trainer');
        $query = $builder->get();
        return $query->getResult();
    }
}
