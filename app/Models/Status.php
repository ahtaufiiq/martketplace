<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Status extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_status';
    protected $fillable = [
        'nama_status'
    ];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'status_id', 'id_status');
    }
}
