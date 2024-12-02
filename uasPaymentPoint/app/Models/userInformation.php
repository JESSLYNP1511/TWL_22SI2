<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userInformation extends Model
{
    use HasFactory;
    protected $fillable = ["cust_id",
                            "nama",
                            "email",
                            "alamat",
                            "noHp"];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'cust_id', 'id');
    }
}