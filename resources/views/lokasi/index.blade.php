@extends('layouts.app')
@section('title')
    Data Lokasi
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Daftar Lokasi</div>
                <div class="card-body">
                          <a class="btn btn-success" href="{{route('lokasi.create')}}" >
                            Tambah Data
                          </a>
                      <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Lokasi</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($lokasi as $index => $data)
                                <tr>
                                    <td>{{$index+1}}</td>
                                    <td>{{$data->nama_lokasi}}</td>
                                    <td>{{$data->alamat}}</td>
                                    <td><a href="" class="btn btn-success">Edit</a></td>
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