<?php

namespace App\Http\Controllers\Package;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\CheckoutInterface;
use App\Jobs\PackageStatusChecker;
use App\Models\Package;
use App\Models\PackageCheckout;
use App\Models\PackageStatus;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    private $checkoutInterface;

    public function __construct(CheckoutInterface $checkoutInterface)
    {
        return $this->checkoutInterface = $checkoutInterface;
    }


    public function checkout(Request $request, $package_id)
   //\Illuminate\Http\RedirectResponse
    {
        $package_details = Package::where("id", $package_id)->first();
        // $checkout = new PackageCheckout();
        $user = $request->user();
        $data = [
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
            "user_id" => $request->user()->id,
            "package_id" => $package_details->id,
            "trx_id" => uniqid(),
            "total" => $package_details->price
        ];
        if ( $user->packagestatus->status == "Expired" )
        {
            $response = $this->checkoutInterface->place_order($data);

            $package_status = PackageStatus::create([
                "user_id" => $request->user()->id,
                "package_id" => $response->package_id,
                "status" => "Active"
            ]);
            $duration = $package_details->duration;
            PackageStatusChecker::dispatch($package_status->id)
                ->delay(now()->addMinute($duration));

            return back()->with("message", "Ordered successfully placed");
        }

        else
        {
            return back()->with("message", "You already have a package");
        }

    }
}

