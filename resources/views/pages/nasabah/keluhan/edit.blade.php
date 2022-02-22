@extends('layouts.nasabah')

@section('content')
 <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Ubah Keluhan</h1>
                
                    </div>

                    
    @if ($errors->any())
   <div class="alert alert-danger">
       <ul>
           @foreach ($errors->all() as $error)
           <li>{{ $error }}</li>
           @endforeach
       </ul>
   </div>
    @endif            
                      
<div class="card shadow">
    <div class="card-body">
        <form action="{{ route('keluhan.update', $item->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="kategori_keluhan">Pilih Kategori Keluhan</label>
                <select name="kategori_keluhan" id="kategori_keluhan">
                    <option value="{{$item->kategori_keluhan}}">-</option>
                    <option value="DEPOSITO">DEPOSITO</option>
                    <option value="KREDIT">KREDIT</option>
                    <option value="TABUNGAN">TABUNGAN</option>
                </select>
            </div>
    
            <div class="form-group">
                 <label for="deskripsi_keluhan">Deskripsi Keluhan</label>
                 <textarea name="deskripsi_keluhan" rows="10" class="d-block w-100 form-control">{{ $item->deskripsi_keluhan }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Simpan Perubahan</button>
        </form>
    </div>
</div>
            <!-- End of Main Content -->

@endsection