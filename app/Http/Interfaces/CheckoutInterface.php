<?php

namespace App\Http\Interfaces;

Interface CheckoutInterface
{
    public function place_order($data);
}
