<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallpaper extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'photographer', 'image_url', 'unsplash_link'];
    public function user() {
        return $this->belongsTo(User::class);
    }
}