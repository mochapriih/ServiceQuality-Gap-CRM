@extends('layouts.dirop')

@section('content')
 <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Ubah Pertanyaan Kuesioner Teller</h1>
                
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
        <form action="{{ route('kuesionerteller.update', $item->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="kategori_kuesioner">Kategori Kuesioner</label>
                <select name="kategori_kuesioner" id="kategori_kuesioner">
                    <option value="TELLER">TELLER</option>
                </select>
            </div>
    
            <div class="form-group">
                 <label for="pertanyaan">Pertanyaan Kuesioner Kredit</label>
                 <textarea name="pertanyaan" rows="10" class="d-block w-100 form-control">{{ $item->pertanyaan }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Simpan Perubahan</button>
        </form>
    </div>
</div>
            <!-- End of Main Content -->

@endsection