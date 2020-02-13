@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Tabungan Siswa</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                
                
                        @csrf
                       
                        <div class="table-responsive">
                            <div class="form-grup">
                                <label for=""> Nama Siswa</label>
                            
                               <select name="siswa_id" id="" class="form-control" readonly>
                                 
                                        <option value="{{$data->id}}" readonly>
                                            {{$data->siswa->nama}}-{{$data->siswa->kelas}}
                                        </option>
                                    
                               </select>
                            </div>
                            <div class="form-grup">
                                <label for="">Jumlah Uang</label>
                                <input type="number" name="jumlah_uang" value="{{$data->jumlah_uang}}" class="form-control" readonly>
                            </div>
                        </div>
            
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
