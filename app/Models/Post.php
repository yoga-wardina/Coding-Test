<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model{
    use HasFactory;

    protected $table = 'posts'; 
    protected $primaryKey = 'idpost';
    public $incrementing = true;
    protected $fillable = ['title', 'content', 'username'];

    public function account()
    {
        return $this->belongsTo(Account::class, 'username', 'username');
    }
}
