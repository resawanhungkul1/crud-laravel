<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hobi extends Model
{
    protected $fillable=['hobi'];
    public $timestamps=true;
    public function mahasiswa()
    {
        return $this->belongsToMany(
            'App\Hobi',
            'mahasiswa_hobi',
            'id_mahasiswa',
            'id_hobi',
            'id_mahasiswa'
        );
    }
}
