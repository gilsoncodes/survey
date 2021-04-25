<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hour extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function minutes(){
      return $this->hasMany(Minute::class);
    }

}
