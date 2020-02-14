@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Hobi</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                
                    <form action="{{route('hobi.store')}}" method="post">
                        @csrf
                        <div class="table-responsive">
                            <div class="form-grup">
                                <label for="">Masukan Hobi Siswa</label>
                            
                                <input type="text" name="hobi" class="form-control" required>
                            </div>
                        </div>
 
                        <br>
                         <div class="from-grup">
                                <button class="btn btn-primary" type="submit">simpan</button>
                                <button class="btn btn-primary" type="reset">reset</button>
                         </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
