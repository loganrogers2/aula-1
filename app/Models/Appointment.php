<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Appointment extends Model
{
    protected $fillable = [
        'client_name',
        'phone',
        'email',
        'date',
        'time',
        'notes',
        'status',
        'professional_id'
    ];

    /**
     * Os serviços deste agendamento
     */
    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class)
                    ->withPivot('price_at_time')
                    ->withTimestamps();
    }

    /**
     * O profissional responsável pelo agendamento
     */
    public function professional()
    {
        return $this->belongsTo(Professional::class);
    }
}
