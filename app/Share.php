<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Share extends Model
{
     protected $fillable = [
         'user_id',
    'name',
    'price',
    'qty'
  ];
     
       public function user(){
        
        return $this->belongsTo(User::class,'user_id');
    }
}
