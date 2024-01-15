<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    protected $fillable = ['nama_produk', 'kategori', 'harga_beli', 'harga_jual', 'stok_produk', 'foto_produk'];
}
