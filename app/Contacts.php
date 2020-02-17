<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Contacts extends Model
{
    use Notifiable;
    protected $fillable = [
        'name', 'subject', 'text', 'email', 'phone'
    ];
    //
}
