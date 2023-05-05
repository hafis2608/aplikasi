<?php

namespace App\Models;

use CodeIgniter\Model;

class Paymentmodel extends Model
{
    protected $table            = 'payment';
    protected $primaryKey       = 'id_payment';
    protected $returnType       = 'object';
    protected $allowedFields    = ['id_member', 'amount', 'date_buyer', 'status'];

    function getAll()
    {
        $builder = $this->db->table('payment');
        $builder->join('member', 'member.id_member = payment.id_member');
        $query = $builder->get();
        return $query->getResult();
    }
}
