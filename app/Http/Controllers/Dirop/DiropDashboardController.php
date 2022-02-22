<?php

namespace App\Http\Controllers\Dirop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{
    User,
    Karyawan,
    Keluhan,
    Nasabah,
    PertanyaanKuesioner,
    Promo
    };



class DiropDashboardController extends Controller
{
    public function index(Request $request)
    {

        return view ('pages.dirop.dashboard', [
            'total_keluhan' => Keluhan::count(),
            'belum_di_proses' => Keluhan::where('status', 'BELUM DI PROSES')->count(),
            'sedang_di_proses' => Keluhan::where('status', 'SEDANG DI PROSES')->count(),
            'selesai' => Keluhan::where('status', 'SELESAI')->count(),
            'total_karyawan' => Karyawan::count(),
            'total_nasabah' => Nasabah::count(),
        ]);

    }
}
