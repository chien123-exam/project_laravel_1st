<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'link',
        'price',
        'old_price',
        'created_by',
        'category_id',
        'lessons',
        'sections',
        'view_count',
        'benefits',
        'fqa',
        'is_feature',
        'is_online',
        'description',
        'content',
        'meta_title',
        'meta_desc',
        'meta_keyword',
    ];

    public function user()
    {
        return $this->belongsToMany(User::class, 'course_user')
            ->withPivot('paid')
            ->withTimestamps();
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'course_user');
    }

    public function sections()
    {
        return $this->hasMany(Section::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

}
