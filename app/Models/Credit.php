<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'description',
        'date',
        'type',
        'filePdf',
        'fileExel',
        'fileImage',
        'range',
    ];

}
