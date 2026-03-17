<?php

namespace App\Controllers;

use App\Models\RoomTypesModel;

class RoomTypes extends BaseController
{
    public function index()
    {
        $roomTypesModel = new RoomTypesModel();

        $roomTypes = $roomTypesModel->getAllRoomTypes();

        //return view('room-types/index', ['roomTypes' => $roomTypes]);
        return view('room-types/index', compact('roomTypes'));
    }

    public function create()
    {
        return view('room-types/create');
    }

    public function store()
    {
        
        return redirect()->to('/room-types');
    }

    public function edit($id)
    {
       
        return view('room-types/edit', compact('roomTypes'));
    }

    public function update($id)
    {
        
        return redirect()->to('/room-types');
    }

    public function delete($id)
    {
        
        return redirect()->to('/room-types');
    }

    public function detail($id)
    {
        
        return view('room-types/detail', compact('roomTypes'));
    }
}