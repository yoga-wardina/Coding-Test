<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Account extends Authenticatable{
    use HasFactory, Notifiable;
    protected $table = 'accounts';
    protected $primaryKey = 'username';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    
    protected $fillable = [
        'username',
        'password',
        'name',
        'role',
    ];
    public function post (){
        return $this->hasMany(Post::class);
    }
}
