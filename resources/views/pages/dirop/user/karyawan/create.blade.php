@extends('layouts.dirop')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Karyawan</h1>
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
        <form action="{{ route('datakaryawan.store')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" name="name" rows="10"
                    class="d-block w-100 form-control" value="{{old ('name')}}"></input>
            </div>
            <div class="form-group">
                <label for="ktp">Nomor KTP</label>
                <input type="text" name="ktp" rows="10"
                    class="d-block w-100 form-control" value="{{old ('ktp')}}"></input>
            </div>
            <div class="form-group">
                <label for="telepon">Nomor Telepon</label>
                <input type="text" name="telepon" rows="10"
                    class="d-block w-100 form-control" value="{{old ('telepon')}}"></input>
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin">
                    <option value="PRIA">PRIA</option>
                    <option value="WANITA">WANITA</option>
                </select>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" rows="10"
                    class="d-block w-100 form-control" value="{{old ('email')}}"></input>
            </div>

            <div class="form-group">
                <label for="jabatan">Pilih Jabatan</label>
                <select name="jabatan" id="jabatan">
                    <option value="DEWAN KOMISARIS">DEWAN KOMISARIS</option>
                    <option value="DIREKTUR UTAMA">DIREKTUR UTAMA</option>
                    <option value="DIREKTUR OPERASIONAL">DIREKTUR OPERASIONAL</option>
                    <option value="KEPALA BAGIAN OPERASIONAL">KEPALA BAGIAN OPERASIONAL</option>
                    <option value="KEPALA BAGIAN KREDIT">KEPALA BAGIAN KREDIT</option>
                    <option value="KEPALA BAGIAN PENYELESAIAN KREDIT BERMASALAH">KEPALA BAGIANPENYELESAIAN KREDIT BERMASALAH</option>
                    <option value="IT">IT</option>
                    <option value="CUSTOMER SERVICE">CUSTOMER SERVICE</option>
                    <option value="ADMIN KREDIT">ADMIN KREDIT</option>
                    <option value="AKUNTING">AKUNTING</option>
                    <option value="KOLEKTOR">KOLEKTOR</option>
                    <option value="ANALIS">ANALIS</option>
                    <option value="SURVEYOR">SURVEYOR</option>
                    <option value="MARKETING">MARKETING</option>
                    <option value="TELLER">TELLER</option>
                    <option value="OFFICE BOY">OFFICE BOY</option>
                    <option value="SECURITY">SECURITY</option>
                </select>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" rows="2"
                    class="d-block w-100 form-control">{{old ('alamat')}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
        </form>
    </div>
</div>
<!-- End of Main Content -->

@endsection