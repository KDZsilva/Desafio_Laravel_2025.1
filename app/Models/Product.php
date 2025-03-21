<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
     /** @use HasFactory<\Database\Factories\ProductFactory> */
     use HasFactory, Notifiable;

     /**
      * The attributes that are mass assignable.
      *
      * @var list<string>
      */
     protected $fillable = [
         'name',
         'descricao',
         'category_id',
         'thumbnail',
         'user_id',
         'preco',
         'desconto',
         'quantd_vendidas',
     ];
 
    //  /**
    //   * The attributes that should be hidden for serialization.
    //   *
    //   * @var list<string>
    //   */
    //  protected $hidden = [
    //      'user_id',
    //      'remember_token',
    //      'cpf',
    //  ];
 
    //  /**
    //   * Get the attributes that should be cast.
    //   *
    //   * @return array<string, string>
    //   */
    //  protected function casts(): array
    //  {
    //      return [
    //          'email_verified_at' => 'datetime',
    //          'password' => 'hashed',
    //          'cpf' => 'hashed',
    //      ];
    //  }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
       
    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
