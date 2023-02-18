<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MbtiTestDetail extends Model
{
    use HasFactory;

    protected $fillable = ['mbti_test_id', 'soal_id', 'jawaban'];
}
