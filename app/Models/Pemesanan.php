<?php

namespace App\Models;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pemesanan extends Model
{
    use HasFactory;

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
