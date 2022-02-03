<?php

namespace App\Models;

use App\Models\Portofolio;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    public function portofolio()
    {
        return $this->belongsTo(Portofolio::class);
    }

}
