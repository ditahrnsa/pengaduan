<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    protected $table ='masyarakat';
    protected $guarded =['id_masyarakat'];
    protected $primaryKey ='id_masyarakat';


    public function user()
    {
    	return $this->belongTo(User::classs, 'user_id');
    }

      public function pengaduan()
    {
    	return $this->belongTo(Pengaduan::classs, 'id_masyarakat');
    }
}
