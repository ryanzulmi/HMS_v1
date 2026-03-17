<?php

namespace App\Controllers;

use App\Models\TicketModel;

class Dashboard extends BaseController
{
    public function index()
    {

        return view('dashboard/index');
    }
}