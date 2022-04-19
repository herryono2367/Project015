@extends('admin-theme._master') 

@section('judul', 'Data Pelanggan')

@section('isi')


<div class="row mt-4">
    <div class="col-10">
        <div class="card-header">
            Data Customer
            <a class="btn btn-primary float-right"
            href="{{ url ('customer/create')}}"> <i class="fas fa-plus-square"></i></i> tambah data </a></div>
            <div class="card-body">
                <table class="table table-bordered">
                     <thead>
                       <tr>
                            <th>no</th>
                            <th>nama_mk</th>
                            <th>dosen</th>
                            <th>jumlah_soal</th>
                            <th>keterangan</th>
                            <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($customers as $customer)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$customer->nama_mk}}</td>
                            <td>{{$customer->dosen}}</td>
                            <td>{{$customer->jumlah_soal}}</td>
                            <td>{{$customer->keterangan}}</td>
                            <td>
                            <a href="{{url('customer/edit')}}/{{$customer->id}}" class="btn btn-warning">update</a>
                               
                           </form> 
                           </td>
                           <td>
                           <form action="{{ url("customers/{$customer->id}")}}" method="post">
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


