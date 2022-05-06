@extends('admin-theme._master') 

@section('judul', 'Data Pelanggan')

@section('isi')


<div class="row mt-4">
    <div class="col-10">
        <div class="card-header">
            Data soal
            <a class="btn btn-primary float-right"
            href="{{ url ('soal/create')}}"> <i class="fas fa-plus-square"></i></i> tambah data </a></div>
            <div class="card-body">
                <table class="table table-bordered">
                     <thead>
                       <tr style="background-color: #00f5ff;">
                            <th>no</th>
                            <th>nama_mk</th>
                            <th>dosen</th>
                            <th>jumlah_soal</th>
                            <th>keterangan</th>
                            <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($soals as $soal)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$soal->nama_mk}}</td>
                            <td>{{$soal->dosen}}</td>
                            <td>{{$soal->jumlah_soal}}</td>
                            <td>{{$soal->keterangan}}</td>
                            <td >
                                
                            <a href="{{url('soal/edit')}}/{{$soal->id}}" class="btn btn-warning">update</a>
                            </form> 
                           </td>
                           <td>
                           <form action="{{ url("soals/{$soal->id}")}}" method="post"  >
                               @csrf
                               @method('DELETE')
                               <button class="btn btn-danger">hapus</button>
                           </form> 
                           </td>
                        </tr>
                      @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection


