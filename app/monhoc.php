<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class monhoc extends Model
{
    protected $table="monhoc";
    public function phancong()
    {
    	return $this->hasOne('phancong','monhoc_id','id');	
    }
     public function diem()
    {
    	return $this->hasOne('diem','diem_id','id');	
    }
}
