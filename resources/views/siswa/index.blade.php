@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="card-body">
                        @if (session('message'))
                            <div class="alert alert-success" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif
            <div class="card">
                <div class="card-header">Ini Halaman Siswa</div>


                
                    <a href="{{route('siswa.create')}} " class="btn btn-outline-primary float-right">Tambah Siwa</a>
                    
                    <table class="table">
                        <thead>
                            <th>Nama Siswa</th>
                            <th>Kelas</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)

                                <tr>
                                    <td>{{$item->nama}}</td>
                                    <td>{{$item->kelas}}</td>
                                    <td>
                                        <form action="{{route('siswa.destroy',$item->id)}}" method="POST">
                                        
                                        @csrf
                                        @method('DELETE')
                                        <a class="btn btn-outline-warning" href="{{route('siswa.show',$item->id)}}">Show</a>
                                        <a class="btn btn-outline-success" href="{{route('siswa.edit',$item->id)}}">Edit</a>
                                        <button type="submit" class="btn btn-outline-danger" >Delete</button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
