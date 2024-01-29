<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escalao extends Model
{
    use HasFactory;

    public function escalao()
    {
        return $this->belongsTo(Escalao::class);
    }
}
