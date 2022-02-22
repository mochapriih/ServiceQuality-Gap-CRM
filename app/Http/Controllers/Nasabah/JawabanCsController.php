<?php

namespace App\Http\Controllers\Nasabah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JawabanKuesioner;
use App\Models\PertanyaanKuesioner;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class JawabanCsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = PertanyaanKuesioner::Where('kategori_kuesioner', 'CUSTOMER SERVICE')->get();
        
        return view('pages.nasabah.kuesioner.cs.index',[
            'items' => $items,
            
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
        $pertanyaan_kuesioners_id = $request->pertanyaan_kuesioners_id;
        $users_id = Auth::user()->id;
        $persepsi = $request->persepsi;
        $ekspektasi = $request->ekspektasi;

        for($i=0;$i<count($pertanyaan_kuesioners_id);$i++)
        {
            $data = [
                'pertanyaan_kuesioners_id' => $pertanyaan_kuesioners_id[$i],
                'users_id' => $users_id,
                'persepsi' => $persepsi[$i],
                'ekspektasi' => $ekspektasi[$i],
            ];

            JawabanKuesioner::create($data);
        }
        
        return redirect()->route('nasabah-dashboard');
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
