<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudyGroup extends Model
{
    protected $fillable = [
        'name',
        'subject',
        'schedule',
        'type',
        'creator_id',
        'max_members',
    ];
}