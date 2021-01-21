<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['title', 'body'];
    public function user(){
        return $this->belongsTo(User::class);
    }

    // $question = Question::find(1);
}


// SET SQL_REQUIRE_PRIMARY_KEY = OFF;
// SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
// SET AUTOCOMMIT = 0;
// START TRANSACTION;
// SET time_zone = "+00:00";