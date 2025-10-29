<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    protected $fillable = [
        'name',
        'role',
        'bio',
        'photo_url',
        'active'
    ];

    protected $casts = [
        'active' => 'boolean'
    ];

    /**
     * Os serviços que este profissional realiza
     */
    public function services()
    {
        return $this->belongsToMany(Service::class);
    }

    /**
     * Os agendamentos deste profissional
     */
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}