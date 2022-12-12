<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agronomist extends Model
{
    use HasFactory;
    protected $table='agronomist';
    protected $fillable=[
       'id',
        'ag_id',
        'ag_fname',
        'ag_lname',
        'ag_district',
        'ag_sector',
        'ag_cell',
        'ag_village',
        'ag_tel',
        'ag_email',
        'ag_password',
      
        
    ];
    public function cooperatives()
    {
     return $this->belongsTo(cooperatives::class);
    }

   public function managers()
    {
    return $this->belongsTo(managers::class);
    }
}
