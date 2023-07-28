<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Updatecase extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'service',
        'user_id',
        'problem_id',
        'next_hearing',
        "customer_has_access",
        'description',
        'status'
    ];
    public function problem()
    {
        return $this->belongsTo(Problem::class);
    }
    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
