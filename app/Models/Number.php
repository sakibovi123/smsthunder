<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Number extends Model
{
    use HasFactory;

    protected $table = "numbers";

    protected $fillable = [ "callerId" ];


    public function campaign(){
        return $this->belongsTo(Campaign::class);
    }
}
