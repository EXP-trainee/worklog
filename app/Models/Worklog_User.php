<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class Worklog_User extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $guard = 'member';
    protected $table = 'worklog__users';
    public function position()
    {
        return $this->hasOne('App\Models\Worklog_Position', 'id', 'position_id');
    }
}
