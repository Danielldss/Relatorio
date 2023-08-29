<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orcamentos extends Model
{
    use HasFactory;
    protected $table = 'orcamentos';

    protected $fillable = [
       'request',
       'type',
       'place',
       'situation',
       'data_budget',
       'value_labor',
    ];

    public function produto()
    {
        return $this->hasMany(Product::class, 'orcamento_id');
    }


}
