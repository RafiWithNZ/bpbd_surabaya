<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prabencanas extends Model
{
    protected $fillable = ['deskripsi_prabencana','gambar_prabencana'];
    
    protected $guarded = ['judul','id'];
}
