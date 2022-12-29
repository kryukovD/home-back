<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DetailFeature;

class Feature extends Model
{
    use HasFactory; 
    protected $table='feature';
    public function detail()
    {
        return $this->hasOne(DetailFeature::class,'id','detail_id');
    }
}
