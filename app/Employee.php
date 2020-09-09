<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $fillable = ['name', 'project_id'];

    public function projects() {
        return $this->belongsTo('App\Project');
    }
}
