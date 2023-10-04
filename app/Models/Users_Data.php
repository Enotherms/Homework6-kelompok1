<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Users_Data extends Model
{
    use HasFactory;
    public $incrementing = true;
    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'alamat', 'password'];
    protected $table = 'users';

    public function balance()
    {
        return $this->hasOne(Users_Balance::class, 'id');
    }
}
