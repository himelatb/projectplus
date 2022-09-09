<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function receiver()
    {
       return $this->hasOne(User::class, 'id', 'to');
    }

    public function sender()
    {
       return $this->hasOne(User::class, 'id', 'from');
    }
}
