<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'projects';
    protected $fillable = [
        'name',
        'slug',
        'description',
        'background_image_url',
        'avatar_image_url',
        'start_date',
        'end_date',

    ];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
