<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Boolean;

class Comment extends Model {
    use HasFactory;

    protected $fillable = [
        "id",
        "content",
        "note",
        "validated",
        "user_id",
        "serie_id",];

    // A comment is written by an user
    public function utilisateur() {
        return $this->belongsTo(User::class, 'user_id');
    }

    // A comment is dedicated to a serie
    public function serie() {
        return $this->belongsTo(Serie::class, 'serie_id');
    }

    public function valide():Boolean{//pour detail.blade
        return $this->validated==1;
    }
}
