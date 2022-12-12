<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cooperatives extends Model
{
    use HasFactory;
    protected $table='cooperatives';
    protected $fillable=[
    
       'coop_id',
        'coop_name',
        'coop_district',
        'coop_sector',
        'coop_cell',
        'coop_village',
        'coop_tel',
        'coop_email',
       'coop_tin',
        
    ];

    public function agronomist()
    {
   
    return $this->hasMany(agronomist::class);
    }
   

    public function devices()
 {

 return $this->hasMany(devices::class);
 }

 
 public function managers()
 {

 return $this->hasOne(managers::class);
 }}





