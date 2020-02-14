@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Hobi</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                
                    <form action="{{route('hobi.update',$hobi->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="table-responsive">
                            <div class="form-grup">
                                <label for="">Masukan Hobi Siswa</label>   
                                <input type="text" name="hobi" value="{{$hobi->hobi}}" class="form-control" required>
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
