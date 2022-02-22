<?php

namespace App\Http\Controllers\Dirop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JawabanKuesioner;
use App\Models\PertanyaanKuesioner;
use DB;

class HasilTellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pertanyaans = PertanyaanKuesioner::where('kategori_kuesioner', 'TELLER')->paginate(20);

        foreach($pertanyaans as $key => $item) {
            $jpersepsi1 = JawabanKuesioner::where('persepsi', '1')->where('pertanyaan_kuesioners_id', $item->id)->get()->count();
                $jpersepsi2 = JawabanKuesioner::where('persepsi', '2')->where('pertanyaan_kuesioners_id', $item->id)->get()->count();
                $jpersepsi3 = JawabanKuesioner::where('persepsi', '3')->where('pertanyaan_kuesioners_id', $item->id)->get()->count();
                $jpersepsi4 = JawabanKuesioner::where('persepsi', '4')->where('pertanyaan_kuesioners_id', $item->id)->get()->count();
                $jpersepsi5 = JawabanKuesioner::where('persepsi', '5')->where('pertanyaan_kuesioners_id', $item->id)->get()->count();

                $hitungpersepsi = ($jpersepsi1 * 1) + ($jpersepsi2 * 2) + ($jpersepsi3 * 3) + ($jpersepsi4 * 4) + ($jpersepsi5 * 5);

                $jekpektasi1 = JawabanKuesioner::where('ekspektasi', '1')->where('pertanyaan_kuesioners_id', $item->id)->get()->count();
                $jekpektasi2 = JawabanKuesioner::where('ekspektasi', '2')->where('pertanyaan_kuesioners_id', $item->id)->get()->count();
                $jekpektasi3 = JawabanKuesioner::where('ekspektasi', '3')->where('pertanyaan_kuesioners_id', $item->id)->get()->count();
                $jekpektasi4 = JawabanKuesioner::where('ekspektasi', '4')->where('pertanyaan_kuesioners_id', $item->id)->get()->count();
                $jekpektasi5 = JawabanKuesioner::where('ekspektasi', '5')->where('pertanyaan_kuesioners_id', $item->id)->get()->count();

                $hitungekspektasi = ($jekpektasi1 * 1) + ($jekpektasi2 * 2) + ($jekpektasi3 * 3) + ($jekpektasi4 * 4) + ($jekpektasi5 * 5);

                $hitungratap = $hitungpersepsi / 30;
                $hitungratae = $hitungekspektasi /30;

                $hitunggap[] = [($hitungratap - $hitungratae), $key];
                
        }
        $tekshasil[] = [round(min($hitunggap)[0],2), $pertanyaans[min($hitunggap)[1]]->pertanyaan];
        
        return view('pages.dirop.jawaban_kuesioner.cs.result',[
                'pertanyaans' => $pertanyaans,
                'hitunggap' => $hitunggap,
                'tekshasil' => $tekshasil,
        ]);


        return view('pages.dirop.jawaban_kuesioner.cs.result',[
                'pertanyaans' => $pertanyaans,
                // 'persepsis' => $persepsis,

    
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}