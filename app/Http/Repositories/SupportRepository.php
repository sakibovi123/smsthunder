<?php

namespace App\Http\Repositories;

use App\Http\Interfaces\SupportInterface;
use App\Models\Customer\Support;

class SupportRepository implements SupportInterface
{
    public function take_support($data)
    {
        // TODO: Implement take_support() method.
        return Support::create($data);
    }
}
