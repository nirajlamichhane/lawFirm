<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CallBack extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'address',
        'phone',
        'email',
        'enquiry',
        "isComplete"
    ];

    protected $casts = [
        "isComplete" => "boolean"
    ];
}
