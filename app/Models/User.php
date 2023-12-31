<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    const GENDER = [
        'male' => 1,
        'famale' => 2
    ];

    const TYPE = [
        'admin' => 2,
        'student' => 1
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'phone',
        'email',
        'password',
        'type',
        'gender',
        'address',
        'avatar'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function getGenderLabelAttribute()
    {
        if ($this->attributes['gender'] == static::GENDER['male']) {
            return 'Male';
        }

        if ($this->attributes['gender'] == static::GENDER['famale']) {
            return 'Famale';
        }

        return null;
    }

    public function getUserTypeAttribute()
    {
        if ($this->attributes['type'] == static::TYPE['admin']) {
            return 'Admin';
        }

        return 'Student';
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_user')
            ->withPivot('paid')
            ->withTimestamps();
    }

}
