@extends('layouts.app')
@section('Mutasi Peralatan')
    Mutasi Peralatan
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Mutasi Peralatan</div>
                    <div class="card-body">
                        <form action="{{route('lokasi.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                              <label for="">Lokasi Sebelum</label>
                              <select class="form-control" name="id_lokasi">
   
                                <option>Select Product</option>
                                  
                                @foreach ($lokasi as $key => $value)
                                  <option value="{{ $key }}" {{ ( $key == $selectedID) ? 'selected' : '' }}> 
                                      {{ $value }} 
                                  </option>
                                @endforeach    
                              </select>
                            </div>
                            <div class="form-group">
                                <label for="">Lokasi Sesudah</label>
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