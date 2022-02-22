<?php

namespace App\Http\Controllers\Nasabah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NasabahDashboardController extends Controller
{
    public function index(Request $request)
    {
        return view ('pages.nasabah.dashboard');
    }
}
