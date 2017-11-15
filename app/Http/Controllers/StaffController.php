<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Staff;

class StaffController extends Controller
{
    public function index()
    {
       $staffs = DB::connection('mysql_connection')
        ->table('rota_slot_staff')
        ->get();

      return view('main', compact('staffs'));
    }
}
