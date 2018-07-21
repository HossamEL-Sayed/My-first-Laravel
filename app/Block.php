<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
	protected $fillable = ['title'];

    public function tasks()
    {
    	return $this->belongsToMany(Task::class, 'block_task', 'block_id', 'task_id');
    }
}
