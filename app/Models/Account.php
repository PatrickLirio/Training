<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $table = 'accounts';


    protected $fillable = [
        'currentBalance',
        'created_by',
        'created_at',
        'updated_by',
        'updated_at',
        'accountid',
        'accountname',
        'bankname',
        'dateopened',
    ];
}
