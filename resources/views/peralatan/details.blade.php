@extends('layouts.app')
@section('title')
    Detail Data Peralatan
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Peralatan</div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="row">
                            <div class="col-md-3 text-dark">
                                Nama Peralatan 
                            </div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-6">
                                {{$detail->nama_peralatan}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 text-dark">
                                Tahun Pembelian 
                            </div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-6">
                                {{$detail->tahun_pembelian}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 text-dark">
                                Lokasi Peralatan 
                            </div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-6">
                                {{$detail->lokasi}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 text-dark">
                                Username 
                            </div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-6">
                                {{$detail->username}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 text-dark">
                                Password 
                            </div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-6">
                                {{$detail->password}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 text-dark">
                                Lokasi 
                            </div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-6">
                                {{$detail->lokasi}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 text-dark">
                                Status 
                            </div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-6">
                                @if ($detail->status == 0)
                                    Baik
                                @else
                                    Rusak
                                @endif
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Data Tambahan --}}
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Tambahan</div>
                <div class="card-body">
                    
                    <div class="row justify-content-center">
                        <div class="row">
                            <div class="col-md-3 text-dark">
                                IP Address 
                            </div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-6">
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 text-dark">
                                Merk
                            </div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-6">
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 text-dark">
                                Type 
                            </div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-6">
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 text-dark">
                                Port 
                            </div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-6">
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 text-dark">
                                Frekuensi 
                            </div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-6">
                                
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- History --}}
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">History Mutasi Perangkat</div>
                <div class="card-body">
                    <a href="" class="btn btn-success">Mutasikan Peralatan</a>
                    <ul>
                        <li>Belum ada history</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection