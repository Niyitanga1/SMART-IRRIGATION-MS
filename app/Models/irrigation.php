<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class irrigation extends Model
{
    use HasFactory;
    protected $table='irrigation';
    protected $fillable=[
       
        'soil_moisture',
        'soil_temperature',
        'irr_district',
        'irr_sector',
        'irr_cell',
        'irr_village',
        'amount_of_water',
        'irr_coop',
        'time_happened',
       
        
    ];
}
