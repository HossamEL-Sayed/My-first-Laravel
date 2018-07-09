<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['body','description','category_id'];

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

    public function blocks()
    {
    	return $this->belongsToMany(Block::class, 'block_task', 'task_id', 'block_id');
    }
}
