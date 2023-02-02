<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'description',
        'category',
        'location',
        'price',
        'images',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
