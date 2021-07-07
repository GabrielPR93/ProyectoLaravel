<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    protected $guarded=["id"];
 
    protected static function boot()
    {
        parent::boot();
        if (!app()->runningInConsole()) {
            self::creating(function ($table) {
                $table->user_id = auth()->id();
            });
        }
    }
}
