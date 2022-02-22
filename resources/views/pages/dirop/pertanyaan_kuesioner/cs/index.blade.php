@extends('layouts.dirop')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pertanyaan Kuesioner Layanan Customer Service</h1>



    <a href="{{route ('kuesionercs.create')}}" class="btn btn-sn btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i>Tambah Pertanyaan
    </a>

</div>

<div class="row">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kategori Kuesioner</th>
                        <th>Pertanyaan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($items as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{ $item->kategori_kuesioner}}</td>
                        <td>{{ $item->pertanyaan}}</td>
                        <td>
                            <a href="{{ route('kuesionercs.show', $item->id) }}" class="btn btn-info">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('kuesionercs.edit', $item->id) }}" class="btn btn-info">
                                <i class="fa fa-pencil-alt"></i>
                            </a>
                            <form action="{{ route('kuesionercs.destroy', $item->id) }}" method="POST"
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

            <br/>
            {{ $items->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>


</div>
<!-- End of Main Content -->

@endsection