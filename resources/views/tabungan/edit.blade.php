@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Daftar Tabungan Siswa</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                
                    <form action="{{route('tabungan.update',$data->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="table-responsive">
                            <div class="form-grup">
                                <label for="">Pilih Nama Siswa</label>
                            
                               <select name="siswa_id" id="" class="form-control">
                                    @foreach ($siswa as $item)
                                        <option value="{{$item->id}}"{{$item->id==$data->siswa_id ?'selected':''}}>
                                            {{$item->nama}}-{{$item->kelas}}
                                        </option>
                                    @endforeach
                               </select>
                            </div>
                            <div class="form-grup">
                                <label for="">Masukan Jumlah Uang</label>
                         
                                <input type="number" name="jumlah_uang" value="{{$data->jumlah_uang}}" class="form-control" required>
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
