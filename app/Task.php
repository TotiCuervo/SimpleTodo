<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['title, description, completed'];

    public function todo()
    {
        return $this->belongsTo(ToDo::Class);
    }

    public function toggleComplete()
    {
        if ($this->completed) {
            $this->completed = false;
        } else {
            $this->completed = true;
        }

        $this->save();
    }
}
