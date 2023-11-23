<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';
    protected $primaryKey = 'id';
    protected $fillable = ['judulBuku','deskripsiBuku','harga','tanggalPinjam','tanggalPengembalian'];
    use HasFactory;
}
