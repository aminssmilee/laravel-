<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    use HasFactory;

    protected $table = 'reminders';

    protected $fillable = [
        'user_id',
        'type',
        'description',
        'reminder_date',
        'status',
        'notification_sent',
    ];

    protected $casts = [
        'reminder_date' => 'datetime:Y-m-d H:i',
        'status' => 'boolean',
        'notification_sent' => 'boolean',
    ];
}

