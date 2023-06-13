<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'title', 'slug', 'body', 'technology_id'];
    public function technology():BelongsTo
    {
        return $this->belongsTo(Technology::class);
    }

    public function collaborators()
    {
        return $this->belongsToMany(Collaborator::class);
    }
}
