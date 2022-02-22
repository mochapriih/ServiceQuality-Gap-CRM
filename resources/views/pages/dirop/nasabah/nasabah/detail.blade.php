@extends('layouts.dirop')

@section('content')
 <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Detail Data Nasabah</h1>
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
                <label for="rekening">Rekening</label>
                <input type="text" readonly class="form-control" name="rekening"  value="{{ $item->rekening }}">    
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
                <label for="nama">Nama</label>
                <input type="text" readonly class="form-control" name="nama"  value="{{ $item->nama }}">    
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="text" readonly class="form-control" name="tanggal_lahir"  value="{{ $item->tanggal_lahir }}">    
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <input type="text" readonly class="form-control" name="jenis_kelamin"  value="{{ $item->jenis_kelamin }}">    
            </div>
            <div class="form-group">
                <label for="pekerjaan">Pekerjaan</label>
                <input type="text" readonly class="form-control" name="pekerjaan"  value="{{ $item->pekerjaan }}">    
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" readonly class="form-control" name="alamat"  value="{{ $item->alamat }}">    
            </div>
            <div class="form-group">
                <label for="nama_ibu">Nama Ibu Kandung</label>
                <input type="text" readonly class="form-control" name="nama_ibu"  value="{{ $item->nama_ibu }}">    
            </div>
            <div class="form-group">
                <label for="nama_pasangan">Nama Pasangan</label>
                <input type="text" readonly class="form-control" name="nama_pasangan"  value="{{ $item->nama_pasangan }}">    
            </div>
            <div class="form-group">
                <label for="produk">Produk</label>
                <input type="text" readonly class="form-control" name="produk"  value="{{ $item->produk }}">    
            </div>
            <div class="form-group">
                <label for="saldo">Saldo</label>
                <input type="text" readonly class="form-control" name="saldo"  value="{{ $item->saldo }}">    
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="text" readonly class="form-control" name="tanggal"  value="{{ $item->tanggal }}">    
            </div>

             <button type="submit" onclick="location.href='{{route ('datanasabah.index')}}'" class="btn btn-primary btn-block">Kembali</button> 
   
    </div>
</div>
            <!-- End of Main Content -->

@endsection