<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable=['nama','kelas'];
    public  function tabungan()
    {
        return $this->hasMany('App\Tabungan','siswa_id');
    }
    public function Hobi()
    {
        return $this->belongsToMany(Hobi::class);
    }
}
