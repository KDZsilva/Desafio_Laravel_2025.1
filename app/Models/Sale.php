<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Sale extends Model
{
     use Notifiable;

     /**
      * The attributes that are mass assignable.
      *
      * @var list<string>
      */
     protected $fillable = [
         'product_id',
         'user_id',
         'unidades',
         'valor',
     ];

     public function product()
     {
        return $this->belongsTo(Product::class);
     }
     public function user()
     {
        return $this->belongsTo(User::class);
     }
}
