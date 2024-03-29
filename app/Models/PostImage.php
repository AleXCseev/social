<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostImage extends Model
{
    use HasFactory;

    protected $table = 'post_images';
    protected $quarded = false;
    protected $fillable = ['path'];

    public function getUrlAttribute() {
        return url('storage/' . $this->path);
    }
}
