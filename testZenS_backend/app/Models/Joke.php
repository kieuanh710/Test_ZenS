<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Joke extends Model
{
    use HasFactory;
    protected $table = 'joke';
    public function getAll(){
        return DB::table("joke")->get();
    }
    public function getId(){
        return DB::table("joke")->select('id')->get()->last();
    }
}