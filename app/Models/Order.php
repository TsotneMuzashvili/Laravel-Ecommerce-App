<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\notifiable;

class Order extends Model
{
    use HasFactory;

    use Notifiable;
}