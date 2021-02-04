<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model {
    use HasFactory;

    public $timestamps = false;
    protected $table = 'pregunta';
    protected $fillable = ['card_id', 'question', 'answer', 'magnitude'];

    public function carta() {
        return $this->belongsTo('App\Models\Carta', 'card_id');
    }
}
