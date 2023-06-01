<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Walikota extends Model
{
    use HasFactory;
    protected $table = 'walikota';

    protected $guarded = ['id'];

    public function gambar(){
        return $this->hasOne(Gambar::class);
    }
}
