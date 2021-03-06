<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\CanResetPassword;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    public function role()
    {
        return $this->hasOne(Role::class, 'id', 'id_role');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    // Relationship to Page
    public function belongsToPage()
    {
        return $this->belongsTo('App\Models\Page');
    }
    // Relationship to Post
    public function belongsToPost()
    {
        return $this->belongsTo('App\Models\Post');
    }
    // Relationship to Testimonial
    public function belongsToTestimonial()
    {
        return $this->belongsTo('App\Models\Testimonial');
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
