<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class managers extends Model
{
    use HasFactory;
    protected $table='managers';
    protected $fillable=[
        'man_id',
        'man_fname',
        'man_lname',
        'man_cooperative',
        'man_district',
        'man_sector',
        'man_cell',
        'man_village',
        'man_tel',
        'man_email',
        'man_Password',
        'cooperatives_id'
    ];


    public function agronomist()
    {
    return $this->hasMany(agronomist::class);
    }

    public function cooperatives()
    {
     return $this->belongsTo(cooperatives::class);
    }
   }
   
   



