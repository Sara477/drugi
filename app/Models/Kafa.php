<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kafa extends Model
{
    use HasFactory;

    protected $table = 'kafe';

    protected $fillable = [
        'naziv',
        'opis',
        'zemlja_id',
        'tip_id',
        'cena'
    ];

    public function zemlja()
    {
        return $this->belongsTo(Zemlja::class);
    }

    public function tip()
    {
        return $this->belongsTo(Tip::class);
    }


}
