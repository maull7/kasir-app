<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    // Kolom yang boleh diisi secara massal
    protected $fillable = [
        'nama',
        'deskripsi',
        'harga',
        'stok',
        'gambar',
        'category_id',
    ];

    // Relasi ke kategori (many to one)
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
