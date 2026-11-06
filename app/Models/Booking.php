<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{

    use HasFactory;

    protected $fillable = [
        'user_id',
        'bike_id',
        'start_time',
        'end_time',
        'status',
        'total_cost',
    ];

    protected function casts(): array {
        return [
            'start_time' => 'dateTime',
            'end_time' => 'dateTime',
            'total_cost' => 'decimal:2',
        ];
    }

}
