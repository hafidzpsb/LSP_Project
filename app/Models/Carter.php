<?php

namespace App\Models;

use App\Models\Car;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Carter extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_mobil',
        'user_id',
        'status',
        'tanggal_sewa',
        'tanggal_pengembalian',
        'harga_sewa',
    ];

    protected $primaryKey = 'id_carter';

    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class, 'id_mobil', 'id_mobil');
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}