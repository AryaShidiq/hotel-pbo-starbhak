<?php

namespace App\Models;

use App\Models\Kategori;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Resepsionis extends Model
{
    use HasFactory;
    use Sortable;

    protected $guarded = [''];
    public $sortable = [
        'nama_pemesan','check_in',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
