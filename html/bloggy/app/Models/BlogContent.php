<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class BlogContent extends Model
{
    use HasFactory;


    public $timestamps=false;



    public function writer(){
      return $this->hasOne(User::class, 'id', 'user_id');
    }
}
