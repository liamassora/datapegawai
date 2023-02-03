<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class statu extends Model
{
    use HasFactory;
    protected $table ="status";
    protected $guarded = ['id'];
    
    public function pegawais()
    {
        return $this->hasMany(pegawai::class);
    }
}
