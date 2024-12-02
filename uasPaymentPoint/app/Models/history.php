<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class history extends Model
{
    use HasFactory;
    protected $fillable = ["cust_id",
                            "email",
                            "type",
                            "price",
                            "status",
                            "paymentMethod",
                            "date",
                            "refNo",
                            "bulan"
                        ];
    public function user()
    {
        return $this->belongsTo(userInformation::class, 'cust_id', 'id'); // Misal relasi ke model User
    }
}                    

