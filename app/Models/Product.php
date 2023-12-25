<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_produk';

    protected $fillable = [
        'nama_produk',
        'harga',
        'kategori_id',
        'status_id',
    ];
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'kategori_id', 'id_kategori');
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class, 'status_id', 'id_status');
    }
}
