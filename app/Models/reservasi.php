<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservasi extends Model
{
    use HasFactory;

    protected $table = "reservasi"; // Eloquent akan membuat model fasilitas menyimpan record di tabel fasilitas
    public $timestamps = false;
    protected $primaryKey = 'id';

    protected $fillable = [
        'kamar_id',
        'checkin',
        'checkout',
        'total',
        'status',
    ];
}
