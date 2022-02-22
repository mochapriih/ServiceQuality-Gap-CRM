@extends('layouts.dirop')

@section('content')
 <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Detail Data Promosi</h1>
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
                <label for="produk">Produk</label>
                <input type="text" readonly class="form-control" name="produk"  value="{{ $item->produk }}">    
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <input type="text" readonly class="form-control" name="deskripsi"  value="{{ $item->deskripsi }}">    
            </div>
            

             <button type="submit" onclick="location.href='{{route ('promo.index')}}'" class="btn btn-primary btn-block">Kembali</button> 
   
    </div>
</div>
            <!-- End of Main Content -->

@endsection