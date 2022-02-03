<?php

namespace App\Models;

use App\Models\Detail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    use HasFactory;

    public function details()
    {
        return $this->hasMany(Detail::class);
    }
}
