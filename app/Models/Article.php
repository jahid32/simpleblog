<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Article extends Model
{
    use HasFactory;
     protected $fillable = [
        'title',
        'slug',
        'body',
        'image',
        'status'
    ];

     public function categories() : BelongsToMany{
         return $this->belongsToMany(Category::class);
     }
    public function tags() : BelongsToMany{
        return $this->belongsToMany(Tag::class);
    }
}
