<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category()
    {
        // hasOne,hasMany,belongsTo,belongsToMany
        return $this->belongsTo(category::class);
    }

    // protected $fillable = ['title','slug','excerpt','body'];

}
