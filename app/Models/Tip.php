<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tip extends Model
{
    use HasFactory;

    protected $table = 'tipovi';

    protected $fillable = [
        'tip'
    ];

    public function kafe()
    {
        return $this->hasMany(Kafa::class);
    }
}
