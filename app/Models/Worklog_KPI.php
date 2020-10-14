<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worklog_KPI extends Model
{
    use HasFactory;
    protected $table = 'worklog__k_p_i_s';

    public function position()
    {
        return $this->hasOne('App\Models\Worklog_Position', 'id', 'position_id');
    }
}
