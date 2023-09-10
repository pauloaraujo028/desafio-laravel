<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'cep',
        'rua',
        'bairro',
        'cidade',
        'estado',
        'numero',
        'complemento',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
