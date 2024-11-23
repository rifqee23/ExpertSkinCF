<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Field;
use App\Models\Booking;
use App\Models\Schedule;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
}