<?php

namespace App\Http\Controllers\Dirop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;

class DataUserNasabahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        if($request->has('search')){
            $items = User::Where('name', 'LIKE', '%'.$request->search.'%')
            ->Where('roles', 'NASABAH')
            ->orWhere('ktp', 'LIKE', '%'.$request->search.'%')
            ->Where('roles', 'NASABAH')
            ->orWhere('telepon', 'LIKE', '%'.$request->search.'%')
            ->Where('roles', 'NASABAH')
            ->orWhere('email', 'LIKE', '%'.$request->search.'%')
            ->Where('roles', 'NASABAH')
            ->orWhere('pekerjaan', 'LIKE', '%'.$request->search.'%')
            ->Where('roles', 'NASABAH')
            ->orderBy('name', 'ASC')
            ->paginate(10);
        }else{
            $items = User::orderBy('name', 'ASC')
            ->where('roles', 'NASABAH')
            ->paginate(10);
        }
        
        return view('pages.dirop.user.nasabah.index',[
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
        $item = User::findOrfail($id);

        return view('pages.dirop.user.nasabah.detail' ,[
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
        $item = User::findOrfail($id);

        return view('pages.dirop.user.nasabah.edit' ,[
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
    public function update(UserRequest $request, $id)
    {
        $data = $request->all();
        $item = User::findOrFail($id);
        $item->update($data);

        return redirect()->route('datausernasabah.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = User::findOrFail($id);
        $item->delete();

        return redirect()->route('datausernasabah.index');
    }
}
