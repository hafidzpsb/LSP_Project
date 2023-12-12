<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_mobil',
        'tipe_mobil',
        'brand_mobil',
    ];

    protected $primaryKey = 'id_kategori';

    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class, 'id_mobil', 'id_mobil');
    }
}
