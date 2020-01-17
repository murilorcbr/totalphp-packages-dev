<?php

namespace TotalPHP\MeetUp\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Participant
 * @author    Murilo Santos <murilorcbr@gmail.com>
 */
class Participant extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'document',
    ];
}
