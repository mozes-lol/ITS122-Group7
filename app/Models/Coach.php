<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    protected $table = 'coaches';
    protected $primaryKey = 'coach_id';

    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'certification',
        'specialization',
        'hire_date'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function archers()
    {
        return $this->belongsToMany(
            Archer::class,
            'coach_archer',
            'coach_id',
            'archer_id'
        );
    }
}