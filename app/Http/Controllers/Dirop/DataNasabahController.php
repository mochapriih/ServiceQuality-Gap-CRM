<?php

namespace App\Http\Controllers\Dirop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nasabah;
use App\Http\Requests\Dirop\DataNasabahRequest;
use Illuminate\Support\Facades\Auth;

class DataNasabahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            $items = Nasabah::where('nama', 'LIKE', '%'.$request->search.'%')
            ->orWhere('rekening', 'LIKE', '%'.$request->search.'%')
            ->orWhere('ktp', 'LIKE', '%'.$request->search.'%')
            ->orWhere('telepon', 'LIKE', '%'.$request->search.'%')
            ->orWhere('pekerjaan', 'LIKE', '%'.$request->search.'%')
            ->orWhere('produk', 'LIKE', '%'.$request->search.'%')
            ->orWhere('tanggal', 'LIKE', '%'.$request->search.'%')
            ->orderBy('rekening', 'ASC')
            ->paginate(10);
        }else{
            $items = Nasabah::orderBy('rekening', 'ASC')
            ->paginate(10);
        }
        
        return view('pages.dirop.nasabah.nasabah.index',[
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
        return view('pages.dirop.nasabah.nasabah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DataNasabahRequest $request)
    {
        $data = $request->all();
        Nasabah::create($data);
        return redirect()->route('datanasabah.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Nasabah::findOrfail($id);

        return view('pages.dirop.nasabah.nasabah.detail' ,[
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
        $item = Nasabah::findOrfail($id);

        return view('pages.dirop.nasabah.nasabah.edit' ,[
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
    public function update(DataNasabahRequest $request, $id)
    {
        $data = $request->all();
        $item = Nasabah::findOrFail($id);
        $item->update($data);

        return redirect()->route('datanasabah.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Nasabah::findOrFail($id);
        $item->delete();

        return redirect()->route('datanasabah.index');
    }


}
