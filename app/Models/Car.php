<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_mobil',
        'jumlah',
    ];

    protected $primaryKey = 'id_mobil';

    public function type(): HasOne
    {
        return $this->hasMany(Type::class);
    }
}
