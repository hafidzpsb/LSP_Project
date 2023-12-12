<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Type extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_mobil',
        'tipe_mobil',
        'brand_mobil',
    ];

    protected $primaryKey = 'id_kategori';

    public function car(): HasOne
    {
        return $this->hasOne(Car::class, 'id_mobil', 'id_mobil');
    }
}
