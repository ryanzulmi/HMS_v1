<?php
namespace App\Controllers;

use App\Models\RoomsModel;

class Rooms extends BaseController
{
    public function index()
    {
        $roomsModel = new RoomsModel();

        $rooms = $roomsModel->getAllRooms();

        //return view('rooms/index', ['rooms' => $rooms]);
        return view('rooms/index', compact('rooms'));
    }

    public function create()
    {
        return view('rooms/create');
    }

    public function store()
    {
        
        return redirect()->to('/rooms');
    }

    public function edit($id)
    {
       
        return view('rooms/edit', compact('rooms'));
    }

    public function update($id)
    {
        
        return redirect()->to('/rooms');
    }

    public function delete($id)
    {
        
        return redirect()->to('/rooms');
    }

    public function detail($id)
    {
        
        return view('rooms/detail', compact('rooms'));
    }
}
