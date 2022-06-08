<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'pais', 'ano_nasc', 'area'];

    public function livro(){
        return $this->belongsToMany(Livro::class);
    }
}
