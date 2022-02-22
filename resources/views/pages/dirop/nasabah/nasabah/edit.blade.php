@extends('layouts.dirop')

@section('content')
 <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Ubah Data Nasabah</h1>
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
        <form action="{{ route('datanasabah.update', $item->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            
            <div class="form-group">
                <label for="rekening">Rekening</label>
                <input type="text"  class="form-control" name="rekening"  value="{{ $item->rekening }}"></input>    
            </div>
            <div class="form-group">
                <label for="ktp">KTP</label>
                <input type="text"  class="form-control" name="ktp"  value="{{ $item->ktp }}"></input>    
            </div>
            <div class="form-group">
                <label for="telepon">Telepon</label>
                <input type="text"  class="form-control" name="telepon"  value="{{ $item->telepon }}"></input>    
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text"  class="form-control" name="nama"  value="{{ $item->nama }}"></input>    
            </div>
            <div class="form-group">
                <label for="date">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir"  value="{{ $item->tanggal_lahir }}"></input>   
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Pilih jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin">
                <option value="{{$item->jenis_kelamin}}">-</option>
                <option value="PRIA">PRIA</option>
                    <option value="WANITA">WANITA</option>
                </select>
            </div>
            <div class="form-group">
                <label for="pekerjaan">Pekerjaan</label>
                <input type="text"  class="form-control" name="pekerjaan"  value="{{ $item->pekerjaan }}"></input>    
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" rows="10" class="form-control" name="alamat"  value="{{ $item->alamat }}"></input>   
            </div>
            <div class="form-group">
                <label for="nama_ibu">Nama Ibu Kandung</label>
                <input type="text"  class="form-control" name="nama_ibu"  value="{{ $item->nama_ibu }}"></input>
            </div>
            <div class="form-group">
                <label for="nama_pasangan">Nama Pasangan</label>
                <input type="text"  class="form-control" name="nama_pasangan"  value="{{ $item->nama_pasangan }}"> </input>   
            </div>
            <div class="form-group">
                <label for="produk">Pilih Produk</label>
                <select name="produk" id="produk">
                <option value="{{$item->produk}}">-</option>
                <option value="DEPOSITO">DEPOSITO</option>
                    <option value="KREDIT">KREDIT</option>
                    <option value="TABUNGAN">TABUNGAN</option>
                </select>
            </div>
            <div class="form-group">
                <label for="saldo">Saldo</label>
                <input type="text"  class="form-control" name="saldo"  value="{{ $item->saldo }}"></input>    
            </div>
            <div class="form-group">
                <label for="date">Tanggal</label>
                <input type="date" class="form-control" name="tanggal" id="tanggal"  value="{{ $item->tanggal }}"></input>   
            </div>
            
            
            
            <button type="submit" class="btn btn-primary btn-block">Simpan Perubahan</button>
        </form>
    </div>
</div>
            <!-- End of Main Content -->

@endsection