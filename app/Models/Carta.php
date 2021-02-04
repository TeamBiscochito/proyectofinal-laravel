<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carta extends Model {
    use HasFactory;

    public $timestamps = false;
    protected $table = 'carta';
    protected $fillable = ['picUrl', 'name', 'description'];

    public function preguntas() {
        return $this->hasMany('App\Models\Pregunta', 'id');
    }
}
