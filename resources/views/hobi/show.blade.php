@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Hobi</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                
                        <div class="table-responsive">
                            <div class="form-grup">
                                <label for="">Hobi Siswa</label>
              
                                <input type="text" value="{{$hobi->hobi}}" name="nama" class="form-control" readonly>
                            </div>
                            <br>
                            <a href="{{url()->previous()}}" class="btn btn-outline-dark">Kembali</a>
                        </div>
              
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
