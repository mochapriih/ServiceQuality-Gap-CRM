@extends('layouts.dirop')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Nasabah</h1>
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
        <form action="{{ route('datanasabah.store')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="rekening">Nomor Rekening</label>
                <input type="text" name="rekening" rows="10"
                    class="d-block w-100 form-control" value="{{old ('rekening')}}"></input>
            </div>
            
            <div class="form-group">
                <label for="ktp">Nomor KTP</label>
                <input type="text" name="ktp" rows="10"
                    class="d-block w-100 form-control" value="{{old ('ktp')}}"></input>
            </div>
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" name="nama" rows="10"
                    class="d-block w-100 form-control" value="{{old ('nama')}}"></input>
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir"
                    class="d-block w-100 form-control" value="{{old ('tanggal_lahir')}}"></input>
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin">
                    <option value="PRIA">PRIA</option>
                    <option value="WANITA">WANITA</option>
                </select>
            </div>
            <div class="form-group">
                <label for="telepon">Nomor Telepon</label>
                <input type="text" name="telepon" rows="10"
                    class="d-block w-100 form-control" value="{{old ('telepon')}}"></input>
            </div>
            <div class="form-group">
                <label for="pekerjaan">Pekerjaan</label>
                <input type="text" name="pekerjaan" rows="10"
                    class="d-block w-100 form-control" value="{{old ('pekerjaan')}}"></input>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" rows="2"
                    class="d-block w-100 form-control">{{old ('alamat')}}</textarea>
            </div>
            <div class="form-group">
                <label for="nama_ibu">Nama Ibu Kandung</label>
                <input type="text" name="nama_ibu" rows="10"
                    class="d-block w-100 form-control" value="{{old ('nama_ibu')}}"></input>
            </div>
            <div class="form-group">
                <label for="nama_pasangan">Nama Pasangan</label>
                <input type="text" name="nama_pasangan" rows="10"
                    class="d-block w-100 form-control" value="{{old ('nama_pasangan')}}"></input>
            </div>

            <div class="form-group">
                <label for="produk">Pilih Produk</label>
                <select name="produk" id="produk">
                    <option value="DEPOSITO">DEPOSITO</option>
                    <option value="KREDIT">KREDIT</option>
                    <option value="TABUNGAN">TABUNGAN</option>
                </select>
            </div>

            <div class="form-group">
                <label for="saldo">Saldo</label>
                <input type="text" name="saldo" rows="10"
                    class="d-block w-100 form-control" value="{{old ('saldo')}}"></input>
            </div>

            <div class="form-group">
                <label for="tanggal">tanggal</label>
                <input type="date" id="tanggal" name="tanggal"
                    class="d-block w-100 form-control" value="{{old ('tanggal')}}"></input>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
        </form>
    </div>
</div>
<!-- End of Main Content -->

@endsection