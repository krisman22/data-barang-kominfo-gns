@extends('layouts.app')
@section('Tambah Data')
    Tambah Data
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Buat Data Peralatan</div>
                    <div class="card-body">
                        <form action="{{route('peralatan-store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                              <label for="">Nama Peralatan</label>
                              <input type="text" class="form-control" name="nama_alat" placeholder="Mis. Router">
                            </div>
                            <div class="form-group">
                                <label for="">Tahun Pembelian</label>
                                <input type="text" class="form-control" name="tahun" placeholder="2015">
                              </div>
                              <div class="form-group">
                                <label for="">Deskripsi</label>
                                <input type="text" class="form-control" name="deskripsi" placeholder="Merk, spek">
                              </div>
                              <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" class="form-control" name="username" placeholder="admin">
                              </div>
                              <div class="form-group">
                                <label for="">Password</label>
                                <input type="text" class="form-control" name="password" placeholder="admin123">
                              </div>
                              <div class="form-group">
                                <label for="">Status</label>
                                <select class="form-control" name="status">
                                    <option value="0">Baik</option>
                                    <option value="1">Rusak</option>
                                </select>
                              </div>
                            <button type="submit" class="btn btn-primary mt-1">Submit</button>
                          </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection