<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;

    protected $fillable = ['id','name', 'surname','department','employer_ID'];

    public function report(){
        return $this->hasMany(task::class);
    }
}
