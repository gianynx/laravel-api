<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collaborator extends Model
{
    use HasFactory;
    // La variabile $fillable è un array che specifica quali attributi del modello possono essere assegnati in massa (mass assignment).
    // Gli attributi non elencati in $fillable non possono essere assegnati in massa. Questo è importante per evitare potenziali problemi di sicurezza, come l'assegnazione di attributi sensibili o indesiderati attraverso un'operazione di assegnazione in massa.
    protected $fillable = ['name', 'surname', 'image', 'email', 'username'];

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
