@extends('layouts.nasabah')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Kuesioner Pelayanan Customer Service</h1>
</div>

<div class="row">
    <div class="card-body">
        <div class="table-responsive">
        <form action="{{ route('jawabankuesionercs.store')}}" method="post" enctype="multipart/form-data">
                     @csrf
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Pertanyaan</th>
                        <th>Kenyataan</th>
                        <th>Ekspektasi</th>

                    </tr>
                </thead>
                <tbody>
                         
                    @forelse ($items as $item)
                    <tr>
                        <td>
                        {{$loop->iteration}}
                        <input type="text" hidden class="form-control" name="pertanyaan_kuesioners_id[]" 
                        value="{{ $item->id }}">   

                        </td>
                        <td>{{ $item->pertanyaan}}</td>
                        <td> <select name="persepsi[]" id="persepsi">
                            <option value="5">Sangat Puas</option>
                            <option value="4">Puas</option>
                            <option value="3">Cukup Puas</option>
                            <option value="2">Tidak Puas</option>
                            <option value="1">Sangat Tidak Puas</option>
                            </select> </td>
                            <td> <select name="ekspektasi[]" id="ekspektasi">
                            <option value="5">Sangat Puas</option>
                            <option value="4">Puas</option>
                            <option value="3">Cukup Puas</option>
                            <option value="2">Tidak Puas</option>
                            <option value="1">Sangat Tidak Puas</option>
                            </select> </td>
                    </tr>

                    @empty
                    <tr>
                        <td colspan="6" class="text-center">
                            Data Kosong
                        </td>
                    </tr>
                    @endforelse
                    

                    
                    </form>

                </tbody>
                <br />

            </table>
            <button type="submit" class="btn btn-sn btn-primary shadow-sm">Simpan Jawaban</button>
        </div>

    </div>
</div>




</div>
<!-- End of Main Content -->

@endsection