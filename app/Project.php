<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public $fillable = ['title'];

    public function employees() {
        return $this->hasMany('App\Employee');
    }

}
