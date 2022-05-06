@extends('admin-theme._master') 

@section('judul', 'create data')

@section('isi')


<div class="row mt-4">
    <div class="col-10">
        <div class="card-header">
            Data 
            <a class="btn btn-warning float-right"
            href="{{ url ('soal')}}"> 
            <i class="fas fa-backward"></i></i> back 
          </a>
          </div>
            <div class="card-body" >
              <form action="{{url ('soal/store')}}" method="post">
                @csrf
              <div class="form-group">
                <label>nama_mk</label>
                <input type="text" name="nama_mk"class="form-control">

                <div class="form-group">
                <label >dosen</label>
                <input type="text" name="dosen" class="form-control" > 
              </div>

              <div class="form-group">
                <label >jumlah_soal</label>
                <input type="text" name="jumlah_soal" class="form-control" >
              </div>
              <div class="form-group">
                <label >keterangan</label>
                <input type="text" name="keterangan" class="form-control">
              </div>
             <input type="submit" class="btn btn-primary" name="submit" value="save ">
             <a class="btn btn-warning float-right"
              href="{{ url ('soal') }}">
              <i class="fas fa-backward"></i></i> cancel </a>
              </div>

              </form>
         
</div>
</div>
</div>
</div>
@endsection
