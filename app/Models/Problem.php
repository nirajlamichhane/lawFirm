<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    use HasFactory;


    protected $casts = [
        "customer_has_access" => 'boolean',
        "next_hearing" => "date"
    ];
    protected $fillable = ['title', 'user_id', 'description', 'customer_has_access', 'service', 'next_hearing', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function updateCases()
    {
        return $this->hasMany(Updatecase::class);
    }
    
}
