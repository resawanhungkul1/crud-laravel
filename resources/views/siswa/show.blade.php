@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show  Siswa</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                
                        <div class="table-responsive">
                            <div class="form-grup">
                                <label for="">Nama Siswa</label>
              
                                <input type="text" value="{{$siswa->nama}}" name="nama" class="form-control" readonly>
                            </div>
                            <div class="from-grup">
                                <label for="">kelas</label>
                        
                                <input type="text" value="{{$siswa->kelas}}" name="kelas" class="form-control" readonly>
                            </div>
                        </div>
              
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
