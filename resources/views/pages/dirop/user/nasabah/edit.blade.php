@extends('layouts.dirop')

@section('content')
 <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Ubah User Data Nasabah</h1>
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
        <form action="{{ route('datausernasabah.update', $item->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text"  class="form-control" name="name" placeholder="name" value="{{ $item->name }}">    
            </div>
            <div class="form-group">
                <label for="ktp">KTP</label>
                <input type="text"  class="form-control" name="ktp" placeholder="ktp" value="{{ $item->ktp }}">    
            </div>
            <div class="form-group">
                <label for="telepon">Telepon</label>
                <input type="text"  class="form-control" name="telepon" placeholder="telepon" value="{{ $item->telepon }}">    
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text"  class="form-control" name="email" placeholder="email" value="{{ $item->email }}">    
            </div>
            <div class="form-group">
                <input type="hidden" readonly class="form-control" name="password" placeholder="password" value="{{ $item->password }}">    
            </div>
            
            
            <button type="submit" class="btn btn-primary btn-block">Simpan Perubahan</button>
        </form>
    </div>
</div>
            <!-- End of Main Content -->

@endsection