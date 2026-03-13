<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';

    protected $primaryKey = 'user_id';

    public $timestamps = false;

    /**
     * Columns that can be mass assigned
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password_hash',
        'role_id',
        'status',
        'approved_by'
    ];

    /**
     * Hide sensitive fields
     */
    protected $hidden = [
        'password_hash'
    ];

    /**
     * Tell Laravel which column is the password
     */
    public function getAuthPassword()
    {
        return $this->password_hash;
    }

    /**
     * Optional: helper to set password correctly
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password_hash'] = Hash::make($value);
    }

    /**
     * Accessor for full name
     */
    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    /**
     * Relationships
     */

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'role_id');
    }

    public function archer()
    {
        return $this->hasOne(Archer::class, 'user_id', 'user_id');
    }

    public function coach()
    {
        return $this->hasOne(Coach::class, 'user_id', 'user_id');
    }
}