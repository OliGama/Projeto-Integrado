<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editora extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'local', 'site'];

    public function livro(){
        return $this->hasMany(Livro::class);
    }
}
