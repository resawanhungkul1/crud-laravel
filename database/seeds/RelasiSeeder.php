<?php

use Illuminate\Database\Seeder;
use App\Dosen;
use App\Mahasiswa;
use App\Wali;
use App\Hobi;
class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('walis')->delete();
        DB::table('dosens')->delete();
        DB::table('mahasiswas')->delete();
        DB::table('hobis')->delete();
        DB::table('mahasiswa_hobi')->delete();
        //Membuat data dosen
        $dosen=Dosen::create(array(
            'nipd'=>'1234567',
            'nama'=>'Abdul Mustafa'
        ));
        $this->command->info('Data Dosen Telah Di Isi');

        //Membat data Mahasiswa
        $irsyal=Mahasiswa::create(array(
            
            'nama'=>'Abdul Mustafa',
            'nim'=>'1010101010',
            'id_dosen'=>$dosen->id
        ));
        $Ntut=Mahasiswa::create(array(
            
            'nama'=>'Entut Mustafa',
            'nim'=>'0101010101',
            'id_dosen'=>$dosen->id
        ));
        $Icih=Mahasiswa::create(array(
            
            'nama'=>'Icih Mustafa',
            'nim'=>'1010101011',
            'id_dosen'=>$dosen->id
        ));
        $this->command->info('Data Mahasiswa berhasil diisi');

        //Membuat Data Wali
        $dadang=Wali::create(array(
            'nama'=>'dadang',
            'id_mahasiswa'=>$irsyal->id
        ));
        $ucup=Wali::create(array(
            'nama'=>'ucup',
            'id_mahasiswa'=>$Ntut->id
        ));
        $agus=Wali::create(array(
            'nama'=>'dadang',
            'id_mahasiswa'=>$Icih->id
        ));
        $this->command->info('Data Berhasil Di isi!');
        //Membuat Data Hobi
        $melukis_langit=Hobi::create(array('hobi'=>'Melukis Langit'));
        $mandi_hujan=Hobi::create(array('hobi'=>'Mandi Hujan'));
        $ambyar=Hobi::create(array('hobi'=>'Stalking Mantan'));

        $irsyal->hobi()->attach($melukis_langit->id);
        $irsyal->hobi()->attach($ambyar->id);
        $Ntut->hobi()->attach($mandi_hujan->id);
        $Icih->hobi()->attach($ambyar->id);
        //attach melampirkan data baru

        $this->command->info('Data Berhasil Di isi');

    }
}
