@extends('layouts.dirop')

@section('content')
 <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Detail Pertanyaan Kuesioner Kredit</h1>
                
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
                <label for="kategori_kuesioner">Kategori Kuesioner</label>
                <input type="text" readonly class="form-control" name="kategori_kuesioner" value="{{ $item->kategori_kuesioner }}">    
            </div>
    
            <div class="form-group">
                 <label for="pertanyaan">Pertanyaan Kuesioner</label>
                 <textarea name="pertanyaan" readonly rows="5" class="d-block w-100 form-control">{{ $item->pertanyaan }}</textarea>
            </div>

             <button type="submit" onclick="location.href='{{route ('kuesionerkredit.index')}}'" class="btn btn-primary btn-block">Kembali</button> 
   
    </div>
</div>
            <!-- End of Main Content -->

@endsection