<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use HasFactory;

    public function users() {
        return $this -> belongsToMany(User::class);
    }
    public function plans() {
        return $this -> belongsToMany(Plan::class);
    }
}
