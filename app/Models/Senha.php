<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Senha extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'username',
        'password',
        'type',
        'website',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
