<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\CheckoutInterface;
use App\Models\Package;
use App\Models\PackageCheckout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LandingController extends Controller
{

    private $checkoutInterface;

    public function __construct(CheckoutInterface $checkoutInterface)
    {
        return $this->checkoutInterface = $checkoutInterface;
    }

    public function landing():
    \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $packages = Package::all();
        return view("Customer.landing", [
            "packages" => $packages
        ]);
    }

    public function pricing():
    \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $packages = Package::all();
        return view("Customer.pricing_test", [
            "packages" => $packages
        ]);
    }

    public function get_package_details($package_id):
    \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $package_details = Package::where("id", $package_id)->first();
        return view("Customer.checkout", [
            "package_details" => $package_details
        ]);
    }



}
