<?php

namespace App\Models;

use App\Models\kamar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{
    use HasFactory;
    protected $guarded = [''];

    public function kamar()
    {
        return $this->hasMany(kamar::class);
    }

}
