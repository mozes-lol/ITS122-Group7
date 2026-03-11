<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAchievement extends Model
{
    protected $table = 'user_achievements';
    protected $primaryKey = 'user_achievement_id';

    public $timestamps = false;

    protected $fillable = [
        'archer_id',
        'achievement_id',
        'date_awarded'
    ];
}