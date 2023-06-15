<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    protected $primaryKey = 'Flight_ID';
    public $timestamps = false;
    protected $fillable = [
        'Aircraft_ID','Departure_Airport','Arrival_Airport','Departute_Time','Arrival_Time','Flight_Duration'
    ];
}