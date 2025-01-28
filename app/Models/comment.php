<?php

namespace App\Models;

use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $table = 'comments';
    public $timestamp = false;
}
