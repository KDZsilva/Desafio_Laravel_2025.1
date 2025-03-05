<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Address extends Model
{
     /** @use HasFactory<\Database\Factories\AddressFactory> */
     use HasFactory, Notifiable;

     /**
      * The attributes that are mass assignable.
      *
      * @var list<string>
      */
     protected $fillable = [
         'endereco',
         'user_id',
     ];
     public function user()
     {
        return $this->belongsTo(User::class);
     }
}
