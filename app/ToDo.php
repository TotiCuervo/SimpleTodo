<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ToDo extends Model
{
    protected $fillable = ['name, description'];

    public function tasks()
    {
        return $this->hasMany(Task::Class);
    }
}
