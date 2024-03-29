<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KategoriModel extends Model
{
    protected $table = 'm_kategori';
    protected $primaryKey = 'kategori_id'; // perubahan pada variabel primaryKey

    protected $fillable = ['kategori_kode', 'kategori_nama'];

    public function barang(): HasMany // perubahan pada deklarasi relasi HasMany
    {
        return $this->hasMany(BarangModel::class, 'kategori_id', 'kategori_id');
    }
}
