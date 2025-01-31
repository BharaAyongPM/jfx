<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravolt\Indonesia\Models\Province;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'city',
        'province_id',
        'tournament',
        'contact_name',
        'contact_phone',
        'verified',
        'tahun',
    ];

    public function province()
    {
        return $this->belongsTo(Province::class);
    }
}
