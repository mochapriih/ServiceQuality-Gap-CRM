<?php

namespace App\Http\Controllers\Dirop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PertanyaanKuesioner;
use App\Http\Requests\Dirop\PertanyaanKuesionerRequest;

class PertanyaanKreditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = PertanyaanKuesioner::where('kategori_kuesioner', 'KREDIT')
        ->orderBy('id', 'ASC')
        ->paginate(10);
        
        return view('pages.dirop.pertanyaan_kuesioner.kredit.index',[
                'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dirop.pertanyaan_kuesioner.kredit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PertanyaanKuesionerRequest $request)
    {
        $data = $request->all();
        PertanyaanKuesioner::create($data);
        return redirect()->route('kuesionerkredit.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = PertanyaanKuesioner::findOrfail($id);

        return view('pages.dirop.pertanyaan_kuesioner.kredit.detail' ,[
        'item' => $item,
        
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = PertanyaanKuesioner::findOrfail($id);

        return view('pages.dirop.pertanyaan_kuesioner.kredit.edit' ,[
        'item' => $item,
        
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PertanyaanKuesionerRequest $request, $id)
    {
        $data = $request->all();
        $item = PertanyaanKuesioner::findOrFail($id);
        $item->update($data);

        return redirect()->route('kuesionerkredit.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = PertanyaanKuesioner::findOrFail($id);
        $item->delete();

        return redirect()->route('kuesionerkredit.index');
    }
}
