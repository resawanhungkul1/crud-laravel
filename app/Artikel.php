<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable=['judul','slug','deskripsi','foto','user_id','kategori_id'];
    public $timestamps=true;
    public function kategori()
    {
        
        //data Model 'Artikel' bisa dimiliki oleh Model 'Kategori'
        //melalui 'kategori_id'
        return $this->belongsTo('App\Kategori','kategori_id');
    }
    public function user()
    {
        
        //data Model 'Artikel' bisa dimiliki oleh Model 'user'
        //melalui 'kategori_id'
        return $this->belongsTo('App\User','user_id');
    }

    public function tag()
    {
        //Model 'Artikel' Tag Memiliki relasi Many To Many(belongsToMany)
        //Terhadap Model  'Tag' Yg Terhubung Oleh
        //Table 'artikel_tag' masing masing sbagai 'artikel_id' dan
        //'tag_id'
       
        return $this->belongsToMany('App\Tag','artikel_tag','artikel_id','tag_id');
    }

}
