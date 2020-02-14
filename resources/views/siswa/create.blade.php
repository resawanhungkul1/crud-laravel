@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Siswa</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                
                    <form action="{{route('siswa.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="table-responsive">
                            <div class="form-grup">
                                <label for="">Masukan Nama Siswa</label>
                            
                                <input type="text" name="nama" class="form-control" required>
                            </div>
                            <div class="form-grup">
                                <label for="">Masukan kelas</label>
                         
                                <input type="text" name="kelas" class="form-control" required>
                            </div>
                            <div class="form-grup">
                            <label for="">Pilih Hobi</label>
                               <select name="hobi"  class="form-control pilih-hobi" multiple name="hobi_id[]">
                                   @foreach ($hobi as $item)
                                     <option value="{{$item->id}}">{{$item->hobi}}</option>
                                   @endforeach
                               </select>
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
@push('script')
    <script type="text/javascript">
        
        $(document).ready(function(){
            $('.pilih-hobi').select2();
        });
    </script>
@endpush
