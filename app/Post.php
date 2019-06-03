<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=[
        'user_id','tittle','typePet','location','picture','description',
  
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
