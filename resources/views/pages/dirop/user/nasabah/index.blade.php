@extends('layouts.dirop')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Daftar User Nasabah</h1>
</div>

<div class="row">
    <form method="GET" action="/dirop/datausernasabah"
        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        @csrf
        <div class="input-group">
            <input type="search" name="search" required class="form-control bg-light border-0 small" placeholder="Cari data"
                aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>
</div>

<div class="row">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>KTP</th>
                        <th>Telepon</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($items as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{ $item->name}}</td>
                        <td>{{ $item->ktp}}</td>
                        <td>{{ $item->telepon}}</td>
                        <td>{{ $item->email}}</td>
                        <td>
                            <a href="{{ route('datausernasabah.show', $item->id) }}" class="btn btn-info">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('datausernasabah.edit', $item->id) }}" class="btn btn-info">
                                <i class="fa fa-pencil-alt"></i>
                            </a>
                            <form action="{{ route('datausernasabah.destroy', $item->id) }}" method="POST"
                                class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>

                    @empty
                    <tr>
                        <td colspan="6" class="text-center">
                            Data Kosong
                        </td>
                    </tr>

                    @endforelse

                </tbody>
                <br />

            </table>
            Halaman : {{ $items->currentPage() }} <br />
            Jumlah Data : {{ $items->total() }} <br />
            Data Per Halaman : {{ $items->perPage() }} <br />

            <br />
            {{ $items->links('pagination::bootstrap-4') }}
        </div>

    </div>
</div>




</div>
<!-- End of Main Content -->

@endsection