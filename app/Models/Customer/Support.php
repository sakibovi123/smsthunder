<?php

namespace App\Models\Customer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    use HasFactory;

    protected $table = "supports";

    protected $fillable = [
        "ticket_number", "subject", "body", "attachment"
    ];
}
