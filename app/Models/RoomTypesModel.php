<?php

namespace App\Models;

use CodeIgniter\Model;

class RoomTypesModel extends Model
{
    protected $table = 'room_types';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    /* protected $useAutoIncrement = false;
    protected $useTimestamps = false;
    protected $validationRules = [];
    protected $allowedFields = [];
    protected $useSoftDeletes = false;
    protected $protectFields = false;
    protected $skipValidation = false; */

    protected $allowedFields = [
        'name',
        'description',
        'base_price',
        'max_guest',
        'room_size',
        'created_at'

    ];

    public function getAllRoomTypes()
    {
        return $this->select('room_types.*, room_types.name as room_type_name')
            ->findAll();
    }

    public function getRoomTypeById($id)
    {
        return $this->find($id);
    }
}
