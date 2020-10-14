<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminPage extends Model
{
    use HasFactory;

    public function getByAlias($alias){
        return $this->where('alias', $alias)->first();
    }
}
