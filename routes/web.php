<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('welcome');
});

//relasi
Route::get('penulis',function(){
    $penulis=\App\User::find(1);

foreach($penulis->artikel as $data){
        echo "Judul : $data->judul<br>";
        echo "Deskripsi : $data->deskripsi<br>";
        echo "Slug : $data->slug";
        echo "<hr>";
    }
});
//relasi 2
use App\Mahasiswa;
use App\Dosen;
use App\Hobi;

Route::get('relasi-1',function(){
    #mencari mahasiswa dengan Nim '1010101010'
    $mahasiswa = Mahasiswa::where('nim','=','1010101010')->first();
    #Menampilkan nama dosen pembimbing dai mahasiswa
    return $mahasiswa->wali->nama;
});
Route::get('relasi-2',function(){
    #mencari mahasiswa dengan Nim '1010101010'
    $mahasiswa = Mahasiswa::where('nim','=','1010101010')->first();
    #Menampilkan nama dosen pembimbing dai mahasiswa
    return $mahasiswa->dosen->nama;
});
Route::get('relasi-3',function(){
    #mencari dosen dengan nama abdul mustafa
    $dosen = Dosen::where('nama','=','Abdul Mustafa')->first();
    #Menampilkan seluruh data mahasiswa dari Dosen Abdul Mustafa
    foreach ($dosen->mahasiswa as $temp )
    echo "<li> Nama : ".$temp->nama.
    "<strong>".$temp->nim."</strong></li>";
});
Route::get('relasi-4',function(){
    #mencari Data Mahasiswa Yang Memiliki Nama Syahrul
    $novay=Mahasiswa::Where('nama','=','Icih mustafa')->first();
    #Menampilkan Semua Mahasiswa Yang Mempunyai Hobi  Mandi Hujan
    foreach ($novay ->hobi as $temp){
        echo '<li> Nama : '.$temp->hobi.'</li>';
    }
});
Route::get('relasi-5',function(){
    #mencari dosen dengan nama abdul mustafa
    $mandi_hujan = Hobi::where('hobi','=','Mandi Hujan')->first();
    #Menampilkan seluruh data mahasiswa dari Dosen Abdul Mustafa
    foreach ($mandi_hujan->mahasiswa as $temp )
    echo "<li> Nama : ".$temp->nama.
    "<strong>".$temp->nim."</strong></li>";
});

Route::resource('siswa','SiswaController');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('tabungan/report','TabunganController@jumlah_tabungan');
Route::resource('tabungan','TabunganController');
