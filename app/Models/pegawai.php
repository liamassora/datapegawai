<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    use HasFactory;
    protected $table ="pegawais";
    protected $guarded = ['id'];

    public function jenis()
    {
        return $this->belongsTo(jenis::class);
    }

    public function status()
    {
        return $this->belongsTo(statu::class);
    }
}
