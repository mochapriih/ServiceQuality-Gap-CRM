@extends('layouts.dirop')

@section('content')
 <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Detail Data Karyawan</h1>
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
                <label for="name">Nama</label>
                <input type="text" readonly class="form-control" name="name"  value="{{ $item->name }}">    
            </div>
            <div class="form-group">
                <label for="ktp">KTP</label>
                <input type="text" readonly class="form-control" name="ktp"  value="{{ $item->ktp }}">    
            </div>
            <div class="form-group">
                <label for="telepon">Telepon</label>
                <input type="text" readonly class="form-control" name="telepon"  value="{{ $item->telepon }}">    
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <input type="text" readonly class="form-control" name="jenis_kelamin"  value="{{ $item->jenis_kelamin }}">    
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" readonly class="form-control" name="email"  value="{{ $item->email }}">    
            </div>
            <div class="form-group">
                <label for="jabatan">Jabatan</label>
                <input type="text" readonly class="form-control" name="jabatan"  value="{{ $item->jabatan }}">    
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" readonly class="form-control" name="alamat"  value="{{ $item->alamat }}">    
            </div>

             <button type="submit" onclick="location.href='{{route ('datakaryawan.index')}}'" class="btn btn-primary btn-block">Kembali</button> 
   
    </div>
</div>
            <!-- End of Main Content -->

@endsection