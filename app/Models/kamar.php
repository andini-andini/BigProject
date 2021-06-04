<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kamar extends Model
{
    use HasFactory;

    protected $table = "kamar"; // Eloquent akan membuat model fasilitas menyimpan record di tabel fasilitas
    public $timestamps = false;
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama',
        'harga',
        'deskripsi',
    ];
}
