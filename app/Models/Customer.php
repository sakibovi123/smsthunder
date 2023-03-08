<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = "customer";

    protected $fillable = [ "customer_phone" ];

    public function sendmessage () {
        return $this->belongsToMany(SendMessage::class, "customer_send_message");
    }

    public function data_lists()
    {
        return $this->belongsTo(DataList::class);
    }

}
