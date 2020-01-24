<?php

namespace TotalPHP\MeetUp\Models;

use Illuminate\Database\Eloquent\Model;

class Meetup extends Model
{
    protected $fillable = [
        'name',
        'event_date',
    ];

    protected $casts = [
        'event_date' => 'datetime'
    ];

    public function participants()
    {
        return $this->belongsToMany(Participant::class);
    }
}
