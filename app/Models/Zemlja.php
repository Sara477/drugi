<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zemlja extends Model
{
    use HasFactory;

    protected $table = 'zemlje';

    protected $fillable = [
        'naziv'
    ];

    public function kafe()
    {
        return $this->hasMany(Kafa::class);
    }
}
