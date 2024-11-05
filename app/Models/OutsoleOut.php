<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OutsoleOut extends Model
{
    use HasFactory;

        // Nama tabel yang sesuai dengan migrasi
        protected $table = 'outsole_out';

        // Kolom yang dapat diisi melalui metode mass assignment
        protected $fillable = [
            'release',
            'work_order',
            'start_outsole',
            'finish_outsole',
            'po_spk',
            'model_name',
            'style',
            'output',
            'size_36',
            'size_37',
            'size_38',
            'size_39',
            'size_40',
            'size_41',
            'size_42',
        ];

        // Jika ada kolom dengan tipe data lain yang perlu dikonversi
        protected $casts = [
            'release' => 'date',
            'start_outsole' => 'date',
            'finish_outsole' => 'date',
        ];
}
