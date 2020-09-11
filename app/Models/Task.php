<?php


namespace App\Models;


use App\User;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['title', 'schedule', 'label', 'priority', 'status'];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
