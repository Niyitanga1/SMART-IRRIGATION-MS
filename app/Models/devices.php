<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class devices extends Model
{
    use HasFactory;
    protected $table='devices';
    protected $fillable=[
        'dev_id',
        'dev_name',
        'dev_holder',
        'dev_district',
        'dev_sector',
        'dev_cell',
        'dev_village',
        'cooperatives_id'

        
    ];
    public function cooperatives()
{
 return $this->belongsTo(cooperatives::class);
}

}
