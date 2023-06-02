<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SekretarisModel extends Model
{
    use HasFactory;
    protected $table = 'sekretaris';
    protected $primaryKey = 'id_sekretaris';
    protected $fillable = ['nama_sekretaris','password_sekretaris'];
    public final function sensei(): HasMany
    {
        return $this->hasMany(SenseiModel::class, 'sekretaris_id', 'id_sekretaris');
    }
}
