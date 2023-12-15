<?php

namespace App\Models;

use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_mobil',
        'nama_mobil',
        'harga_mobil',
        'foto',
        'id_kategori',
    ];

    protected $primaryKey = 'id_mobil';

    public function type(): BelongsToMany
    {
        return $this->belongsToMany(Type::class, 'multi_types', 'id_mobil', 'id_kategori');
    }
}
