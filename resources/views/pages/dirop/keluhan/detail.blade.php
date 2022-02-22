@extends('layouts.nasabah')

@section('content')
 <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Detail Keluhan</h1>
                
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
        
    
           
            <div class="form-group">
                <label for="kategori_keluhan">Kategori Keluhan</label>
                <input type="text" readonly class="form-control" name="kategori_keluhan" placeholder="kategori_keluhan" value="{{ $item->kategori_keluhan }}">    
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" readonly class="form-control" name="status" placeholder="status" value="{{ $item->status }}">
                
            </div>
            <div class="form-group">
                 <label for="deskripsi_keluhan">Deskripsi Keluhan</label>
                 <textarea name="deskripsi_keluhan" readonly rows="5" class="d-block w-100 form-control">{{ $item->deskripsi_keluhan }}</textarea>
            </div>
            <div class="form-group">
                 <label for="laporan">Laporan</label>
                 <textarea name="laporan" rows="5" readonly class="d-block w-100 form-control">{{ $item->laporan }}</textarea>
            </div>
             <button type="submit" onclick="location.href='{{route ('keluhandirop.index')}}'" class="btn btn-primary btn-block">Kembali</button> 
   
    </div>
</div>
            <!-- End of Main Content -->

@endsection