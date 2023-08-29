<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relatorio extends Model
{
    use HasFactory;
    protected $table = 'relatorio';

    protected $fillable = [
        'request','type','value','place','situation','data_service','service'

    ];
}
