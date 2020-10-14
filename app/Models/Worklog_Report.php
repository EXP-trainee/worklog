<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worklog_Report extends Model
{
    use HasFactory;
    protected $table = 'worklog__reports';

    public function user()
    {
        return $this->hasOne('App\Models\Worklog_User', 'id', 'user_id');
    }

    public function kpi()
    {
        return $this->hasOne('App\Models\Worklog_KPI', 'id', 'kpi_id');
    }
}
