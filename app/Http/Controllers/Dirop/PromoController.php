<?php

namespace App\Http\Controllers\Dirop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Promo;
use App\Http\Requests\Dirop\PromoRequest;
use Illuminate\Support\Facades\Auth;


class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            $items = Promo::where('produk', 'LIKE', '%'.$request->search.'%')
            ->orWhere('deskripsi', 'LIKE', '%'.$request->search.'%')
            ->orderBy('produk', 'ASC')
            ->paginate(10);
        }else{
            $items = Promo::orderBy('produk', 'ASC')
            ->paginate(10);
        }
        
        return view('pages.dirop.promo.promo.index',[
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
        return view('pages.dirop.promo.promo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PromoRequest $request)
    {
        $data = $request->all();
        Promo::create($data);
        return redirect()->route('promo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Promo::findOrfail($id);
        return view('pages.dirop.promo.promo.detail' ,[
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
        $item = Promo::findOrfail($id);

        return view('pages.dirop.promo.promo.edit' ,[
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
    public function update(PromoRequest $request, $id)
    {
        $data = $request->all();
        $item = Promo::findOrFail($id);
        $item->update($data);

        return redirect()->route('promo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Promo::findOrFail($id);
        $item->delete();

        return redirect()->route('promo.index');
    }
}
