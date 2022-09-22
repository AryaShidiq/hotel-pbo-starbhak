<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Resepsionis extends Model
{
    use HasFactory;
    use Sortable;

    protected $guarded = [''];
    public $sortable = [
        'nama_pemesan','check_in',
    ];
}
