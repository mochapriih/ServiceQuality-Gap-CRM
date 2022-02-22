<?php

namespace App\Http\Controllers\Dirop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Karyawan;
use App\Http\Requests\Dirop\DataKaryawanRequest;

class DataKaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            $items = Karyawan::where('name', 'LIKE', '%'.$request->search.'%')
            ->orWhere('ktp', 'LIKE', '%'.$request->search.'%')
            ->orWhere('telepon', 'LIKE', '%'.$request->search.'%')
            ->orWhere('email', 'LIKE', '%'.$request->search.'%')
            ->orWhere('jabatan', 'LIKE', '%'.$request->search.'%')
            ->orderBy('name', 'ASC')
            ->paginate(10);
        }else{
            $items = Karyawan::orderBy('name', 'ASC')
            ->paginate(10);
        }
        
        return view('pages.dirop.user.karyawan.index',[
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
        return view('pages.dirop.user.karyawan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DataKaryawanRequest $request)
    {
        $data = $request->all();
        Karyawan::create($data);
        return redirect()->route('datakaryawan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Karyawan::findOrfail($id);

        return view('pages.dirop.user.karyawan.detail' ,[
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
        $item = Karyawan::findOrfail($id);

        return view('pages.dirop.user.karyawan.edit' ,[
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
    public function update(DataKaryawanRequest $request, $id)
    {
        $data = $request->all();
        $item = Karyawan::findOrFail($id);
        $item->update($data);

        return redirect()->route('datakaryawan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Karyawan::findOrFail($id);
        $item->delete();

        return redirect()->route('datakaryawan.index');
    }
}
