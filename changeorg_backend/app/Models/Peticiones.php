<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Categoria;
use TCG\Voyager\Models\Category;

class Peticiones extends Model
{
    protected $fillable = ['titulo', 'descripcion', 'destinatario', 'image', 'categoria_id'];

    public function firmas()
    {
        return $this->belongsToMany(User::class, 'peticiones_users', 'peticiones_id', 'users_id');
    }

    public function categoria() {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    use HasFactory;
}
