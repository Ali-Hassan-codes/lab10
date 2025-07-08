<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
    protected $fillable = [ 'Name','Password','Subject_Id'];
    
    public function courses(){
    return $this->belongsTo(courses::class,'Subject_Id');
}
    
}

