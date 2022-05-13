@extends('admin-theme._master') 

@section('judul', 'update data')

@section('isi')


<div class="row mt-4">
    <div class="col-10">
        <div class="card-header">
            update data
            <a href="{{ url ('soal')}}"> 
           
            </a>
              </div>
                  <div class="card-body" >
                    <form action="{{route('soal.update', $soal->id)}}" method="post" >
                      @method('PATCH')
                      @csrf
                      <div class="form-group">
                          <label>nama_mk</label>
                          <input type="text" name="nama_mk"class="form-control" value="{{$soal->nama_mk}}">

                        <div class="form-group">
                          <label >dosen</label>
                          <input type="text" name="dosen" class="form-control" value="{{$soal->dosen}}" > 
                        </div>

                        <div class="form-group">
                          <label >jumlah_soal</label>
                          <input type="text" name="jumlah_soal" class="form-control" value="{{$soal->jumlah_soal}}">
                        </div>
                        <div class="form-group">
                          <label >keterangan</label>
                          <input type="text" name="keterangan" class="form-control" value="{{$soal->keterangan}}">
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
