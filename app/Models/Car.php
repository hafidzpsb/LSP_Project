<?php

namespace App\Models;

use App\Models\Type;
use App\Models\Carter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_mobil',
        'nama_mobil',
        'use_for',
        'harga_mobil',
        'foto',
        'id_kategori',
        'tersedia'
    ];

    protected $primaryKey = 'id_mobil';

    public function type(): BelongsToMany
    {
        return $this->belongsToMany(Type::class, 'multi_types', 'id_mobil', 'id_kategori');
    }
    public function carter(): HasOne
    {
        return $this->hasOne(Carter::class, 'id_mobil', 'id_mobil');
    }
}
