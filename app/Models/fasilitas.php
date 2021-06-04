<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fasilitas extends Model
{
    use HasFactory;

    // protected $fasilitas = 'fasilitas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = "fasilitas"; // Eloquent akan membuat model fasilitas menyimpan record di tabel fasilitas
    public $timestamps = false;
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];

    // /**
    //  * The attributes that should be cast to native types.
    //  *
    //  * @var array
    //  */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];
}
