<?php

namespace App\Models;

use App\Models\Kamar;
use App\Models\Pemesanan;
use App\Models\Resepsionis;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{
    use HasFactory;
    protected $guarded = [''];

    public function kamar()
    {
        return $this->hasMany(Kamar::class);
    }
    public function resepsionis()
    {
        return $this->hasOne(Resepsionis::class);
    }
    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class);
    }
}
