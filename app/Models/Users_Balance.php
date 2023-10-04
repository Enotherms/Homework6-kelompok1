<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users_Balance extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_balance';
    protected $fillable = ['balance'];
    protected $table = 'table_balance';

    public function user()
    {
        return $this->belongsTo(Users_Data::class, 'id');
    }
}
