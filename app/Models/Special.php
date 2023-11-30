<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Special extends Model
{
    use HasFactory;
     protected $primaryKey = 'spceial_id';
    
    public function categoryInfo(){
        return $this->belongsTo('App\Models\SpecialCategory','special_category','special_category_id');
    }
}
