@extends('layouts.dirop')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Hasil Kuesioner Kredit</h1>
</div>


<div class="row">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
            <thead>
                    <tr>
                        <th>No</th>
                        <th>Pertanyaan</th>
                        <th>Gap</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pertanyaans as $key => $pertanyaan)
                    <tr>
                        <td>{{ $pertanyaans->firstItem() + $key }}</td>
                        <td>{{ $pertanyaan->pertanyaan }}</td>
                        <td>{{ round($hitunggap[$pertanyaans->firstItem() + $key - 1][0],2) }}</td>
                    </tr>
                    @endforeach
                </tbody>
                <br />
                
            </table>
            <h4>Nilai GAP negatif tertinggi berada pada pernyataan "{{ $tekshasil[0][1] }}" dengan nilai {{ $tekshasil[0][0] }}.</h4>
            <br><br><br>
        </div>

    </div>
</div>




</div>
<!-- End of Main Content -->

@endsection