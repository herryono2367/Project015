@extends('admin-theme._master') 

@section('judul', 'Data Pelanggan')

@section('isi')


<div class="row mt-4">
    <div class="col-6">
        <div class="card-header">
           update 
            <a class="btn btn-warning float-right"
            href="{{ url ('customer') }}">
            <i class="fas fa-backward"></i></i> kembali </a>
          </div>
            <div class="card-body">
           
            <form action="/customer/update/{id}" method="post">
              @csrf
              <div class="form-group">
                <label >nama_mk</label>
                <input type="text" name="nama_mk" class="form-control" value="" >
              </div>

              <div class="form-group">
                <label >dosen</label>
                <input type="text" name="dosen" class="form-control">
              </div>

              <div class="form-group">
                <label >jumlah_soal</label>
                <input type="text" name="jumlah_soal" class="form-control">
              </div>
              <div class="form-group">
                <label >keterangan</label>
                <input type="text" name="keterangan" class="form-control">
              </div>
              
             <input type="submit" class="btn btn-primary" name="submit" value="update">
             <a class="btn btn-warning float-right"
              href="{{ url ('customer') }}">
              <i > batal </a>
              </div>


            </form>
            
            </table>
        </div>
    </div>
</div>


@endsection 