<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collaborator extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'surname', 'image', 'email', 'username'];

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
