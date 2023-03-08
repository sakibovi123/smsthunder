<?php

namespace App\Http\Repositories;

use App\Http\Interfaces\CheckoutInterface;
use App\Models\PackageCheckout;

class CheckoutRepository implements CheckoutInterface
{
    public function place_order($data)
    {
        // TODO: Implement place_order() method.
        return PackageCheckout::create($data);
    }
}
