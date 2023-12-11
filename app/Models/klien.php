<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rencana_acara;

class Klien extends Model
{
    use HasFactory;
    protected $table = 'klien';
    protected $fillable = [
        'nama','email','nomor_telepon','alamat','tanggal_pernikahan'
    ];
    
    public function rencana_acara()
    {
        return $this->hasMany(rencana_acara::class);
    }
}