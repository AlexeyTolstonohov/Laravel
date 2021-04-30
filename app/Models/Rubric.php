<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Posts;
class Rubric extends Model
{
    use HasFactory;
    protected $table = 'rubrics';
    //$rubric = Rubric:find(1);


    public function posts(){

    return $this->hasMany('App\Models\Posts');
    }
}
