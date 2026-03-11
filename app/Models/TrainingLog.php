<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainingLog extends Model
{
    protected $table = 'training_logs';
    protected $primaryKey = 'log_id';

    public $timestamps = false;

    protected $fillable = [
        'archer_id',
        'coach_id',
        'session_date',
        'distance',
        'arrow_count',
        'total_score',
        'coach_rating',
        'technical_notes',
        'created_at'
    ];

    public function archer()
    {
        return $this->belongsTo(Archer::class, 'archer_id', 'archer_id');
    }

    public function coach()
    {
        return $this->belongsTo(Coach::class, 'coach_id', 'coach_id');
    }
}