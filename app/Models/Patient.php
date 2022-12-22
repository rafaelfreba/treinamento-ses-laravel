<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'cpf',
        'cns',
        'name',
        'birth',
        'email',
        'phone',
        'county_id'
    ];

    // protected $casts = [
    //     'birth' => 'date: d/m/Y'
    // ];

    public function county()
    {
        return $this->belongsTo(County::class);
    }
}
