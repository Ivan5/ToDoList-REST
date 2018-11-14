<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Traits\TimestampsTrait;

class Task extends Model
{
    use TimestampsTrait;
    protected $table = 'tasks';
}
