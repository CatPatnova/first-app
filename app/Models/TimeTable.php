<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class TimeTable extends Model
{
    use Notifiable;

    public function routeNotificationFor()
    {
        return 1467836594739216536;
    }
}
