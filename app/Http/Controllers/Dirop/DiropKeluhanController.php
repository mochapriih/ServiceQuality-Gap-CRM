<?php

namespace App\Http\Controllers\Dirop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Keluhan;
use App\Http\Requests\Nasabah\KeluhanRequest;
use Illuminate\Support\Facades\Auth;

class DiropKeluhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            $items = Keluhan::where('kategori_keluhan', 'LIKE', '%'.$request->search.'%')
            ->orWhere('deskripsi_keluhan', 'LIKE', '%'.$request->search.'%')
            ->orWhere('status', 'LIKE', '%'.$request->search.'%')
            ->orderBy('created_at', 'DESC')
            ->paginate(10);
        }else{
            $items = Keluhan::orderBy('created_at', 'DESC')->paginate(10);
        }
        
        return view('pages.dirop.keluhan.index',[
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
        $item = Keluhan::findOrfail($id);

        return view('pages.dirop.keluhan.detail' ,[
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

        return view('pages.dirop.keluhan.edit' ,[
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

        return redirect()->route('keluhandirop.index');
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

        return redirect()->route('keluhandirop.index');
    }
}
