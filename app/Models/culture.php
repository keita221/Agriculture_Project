<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class culture extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'img',
        'description', 
        'prix',
        'quantite',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
