<?php

namespace App\Models;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Type extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_kategori',
        'id_mobil'
    ];

    protected $primaryKey = 'id_kategori';

    public function car(): BelongsToMany
    {
        return $this->belongsToMany(Car::class, 'multi_types', 'id_kategori', 'id_mobil');
    }
}
