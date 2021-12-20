@extends('layouts.app')
@section('title')
    Data Peralatan
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Daftar Peralatan</div>
                <div class="card-body">
                          <a class="btn btn-success" href="{{route('peralatan-create')}}" >
                            Tambah Data
                          </a>
                      <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">tahun</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($peralatan as $index => $data)
                          <tr>
                            <td>{{$index+1}}</td>
                            <td>{{$data->nama_peralatan}}</td>
                            <td>{{$data->tahun_pembelian}}</td>
                            <td>{{$data->lokasi}}</td>
                            <td><a href="{{route('peralatan-detail', $data->id_peralatan)}}" class="btn btn-success">Detail</a></td>
                          </tr>    
                          @endforeach
                          
                          
                        </tbody>
                      </table>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection