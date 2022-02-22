@extends('layouts.dirop')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Ubah Data Karyawan</h1>
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
        <form action="{{ route('datakaryawan.update', $item->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control" name="name" placeholder="name" value="{{ $item->name }}">
            </div>
            <div class="form-group">
                <label for="ktp">KTP</label>
                <input type="text" class="form-control" name="ktp" placeholder="ktp" value="{{ $item->ktp }}">
            </div>
            <div class="form-group">
                <label for="telepon">Telepon</label>
                <input type="text" class="form-control" name="telepon" placeholder="telepon"
                    value="{{ $item->telepon }}">
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
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" placeholder="email" value="{{ $item->email }}">
            </div>
            <div class="form-group">
                <label for="jabatan">Pilih Jabatan</label>
                <select name="jabatan" id="jabatan">
                    <option value="{{$item->jabatan}}">-</option>
                    <option value="DEWAN KOMISARIS">DEWAN KOMISARIS</option>
                    <option value="DIREKTUR UTAMA">DIREKTUR UTAMA</option>
                    <option value="DIREKTUR OPERASIONAL">DIREKTUR OPERASIONAL</option>
                    <option value="KEPALA BAGIAN OPERASIONAL">KEPALA BAGIAN OPERASIONAL</option>
                    <option value="KEPALA BAGIAN KREDIT">KEPALA BAGIAN KREDIT</option>
                    <option value="KEPALA BAGIAN PENYELESAIAN KREDIT BERMASALAH">KEPALA BAGIANPENYELESAIAN KREDIT
                        BERMASALAH</option>
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
                <input type="text" class="form-control" name="alamat" placeholder="alamat" value="{{ $item->alamat }}">
            </div>
            <div class="form-group">
                <input type="hidden" readonly class="form-control" name="password" placeholder="password"
                    value="{{ $item->password }}">
            </div>


            <button type="submit" class="btn btn-primary btn-block">Simpan Perubahan</button>
        </form>
    </div>
</div>
<!-- End of Main Content -->

@endsection