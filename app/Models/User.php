<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public function feedbacks() {
        return $this -> hasMany(Feedback::class);
    }
    public function receipts() {
        return $this -> hasMany(Receipt::class);
    }
}
