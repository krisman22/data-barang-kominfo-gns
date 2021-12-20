@extends('layouts.app')
@section('Tambah Data')
    Tambah Data Lokasi
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Buat Data Lokasi</div>
                    <div class="card-body">
                        <form action="{{route('lokasi.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                              <label for="">Nama Lokasi</label>
                              <input type="text" class="form-control" name="nama" placeholder="Kantor ...">
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <input type="text" class="form-control" name="alamat" placeholder="Jl.">
                              </div>
                              
                            <button type="submit" class="btn btn-primary mt-1">Submit</button>
                          </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection