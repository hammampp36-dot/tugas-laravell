<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    protected $fillable = [
        'title',
        'description',
        'is_completed',
    ];
    //mengatur field yang bisa diisi secara massal (mass assignment) pada model todo. Field yang dapat diisi adalah title, description, dan is_completed.


    protected $functions = [
        'is_completed' => 'boolean',
    ];
    //mengatur field is_completed sebagai boolean, sehingga ketika diambil dari database, field ini akan dikonversi menjadi tipe data boolean (true/false) secara otomatis.
}
