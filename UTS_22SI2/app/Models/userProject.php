<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userProject extends Model
{
    use HasFactory;
    protected $fillable = ['identifier','provider','created','signed_in','user_uid'];
}
