<?php

namespace App\Http\Controllers\Nasabah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Keluhan;
use App\Http\Requests\Nasabah\KeluhanRequest;
use Illuminate\Support\Facades\Auth;

class NasabahKeluhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Keluhan::with('users')
        ->where('users_id', Auth::user()->id)
        ->orderBy('created_at', 'DESC')
        ->paginate(10);
        
        return view('pages.nasabah.keluhan.index',[
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
        return view('pages.nasabah.keluhan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KeluhanRequest $request)
    {
        $data = $request->all();
        Keluhan::create([
            'kategori_keluhan' => request('kategori_keluhan'),
            'deskripsi_keluhan' => request('deskripsi_keluhan'),
            'users_id' => auth()->id()
        ]);
        return redirect()->route('keluhan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Keluhan::findOrfail($id);

        return view('pages.nasabah.keluhan.detail' ,[
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
        $item = Keluhan::findOrfail($id);

        return view('pages.nasabah.keluhan.edit' ,[
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
    public function update(KeluhanRequest $request, $id)
    {
        $data = $request->all();
        $item = Keluhan::findOrFail($id);
        $item->update($data);

        return redirect()->route('keluhan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Keluhan::findOrFail($id);
        $item->delete();

        return redirect()->route('keluhan.index');
    }
}
