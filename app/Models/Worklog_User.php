<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worklog_User extends Model
{
    use HasFactory;
    protected $table = 'worklog__users';
    public function position()
    {
        return $this->hasOne('App\Models\Worklog_Position', 'id', 'position_id');
    }
}
