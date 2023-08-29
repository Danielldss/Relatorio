<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'produtos';
    protected $fillable = [
        'amout_product',
        'single_value',
        'description_product',
        'description_service',
        'total_value',
        'orcamento_id'
    ];

    public function orcamento()
    {
        return $this->belongsTo(Orcamentos::class, 'orcamento_id');
    }
}
