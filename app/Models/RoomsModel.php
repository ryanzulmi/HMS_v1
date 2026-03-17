<?php

namespace App\Models;

use CodeIgniter\Model;

class RoomsModel extends Model
{
    protected $table = 'rooms';
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
        'room_number',
        'room_type_id',
        'floor',
        'status',
        'clean_status',
        'created_at'
    ];

    public function getAllRooms()
    {
        return $this->select('rooms.*, room_types.name as room_type_name')
                    ->join('room_types', 'room_types.id = rooms.room_type_id')
                    ->findAll();
    }

    public function getRoomById($id)
    {
        return $this->find($id);
    }
}