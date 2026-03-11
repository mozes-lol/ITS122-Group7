<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Archer extends Model
{
    protected $table = 'archers';
    protected $primaryKey = 'archer_id';

    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'experience_level',
        'ranking',
        'join_date'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function trainingLogs()
    {
        return $this->hasMany(TrainingLog::class, 'archer_id', 'archer_id');
    }

    public function achievements()
    {
        return $this->belongsToMany(
            Achievement::class,
            'user_achievements',
            'archer_id',
            'achievement_id'
        );
    }
}