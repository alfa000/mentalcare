<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'gambar', 'kategori', 'konten', 'created_by', 'updated_by'];

    public function userCreate()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function userUpdate()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
