<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SenseiModel extends Model
{
    use HasFactory;
    protected $table = 'sensei';
    protected $primaryKey = 'id_sensei';
    protected $fillable = [
        'nama_sensei',
        'password_sensei',
        'kantor_sensei',
        'sekretaris_id',
    ];
    public final function sekretaris(): BelongsTo
    {
        return $this->belongsTo(SekretarisModel::class, 'sekretaris_id', 'id_sekretaris');
    }
}
