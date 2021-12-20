@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    
                    <div class="row justify-content-center">
                        <div class="card m-2 bg-info" style="width: 18rem;">
                            <div class="card-body text-light">
                              <h5 class="card-title">Peralatan</h5>
                              <h2 class="card-text">{{$peralatan}}</h2>
                              <a href="{{route('peralatan')}}" class="btn btn-primary">Details</a>
                            </div>
                        </div>
                        <div class="card m-2 bg-danger" style="width: 18rem;">
                            <div class="card-body text-light">
                              <h5 class="card-title">Gangguan</h5>
                              <h2 class="card-text">10</h2>
                              <a href="#" class="btn btn-primary">Details</a>
                            </div>
                        </div>
                        <div class="card m-2 bg-warning" style="width: 18rem;">
                            <div class="card-body text-light">
                              <h5 class="card-title">Rusak</h5>
                              <h2 class="card-text">10</h2>
                              <a href="#" class="btn btn-primary">Details</a>
                            </div>
                        </div>
                        <div class="card m-2 bg-success" style="width: 18rem;">
                            <div class="card-body text-light">
                              <h5 class="card-title">Lokasi</h5>
                              <h2 class="card-text">10</h2>
                              <a href="{{route('lokasi.index')}}" class="btn btn-primary">Details</a>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
