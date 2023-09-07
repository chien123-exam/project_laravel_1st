<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    public function courses()
    {
        return $this->belongsTo(Lesson::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
