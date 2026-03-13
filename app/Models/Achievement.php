<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    protected $table = 'achievements';
    protected $primaryKey = 'achievement_id';

    public $timestamps = false;

    protected $fillable = [
        'title',
        'description',
        'criteria_type',
        'criteria_value',
        'badge_icon',
        'created_by'
    ];

    public function archers()
    {
        return $this->belongsToMany(
            Archer::class,
            'user_achievements',
            'achievement_id',
            'archer_id'
        );
    }
}