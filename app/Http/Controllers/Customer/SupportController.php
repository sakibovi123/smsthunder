<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\SupportInterface;
use App\Models\Customer\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    private $supportInterface;

    public function __construct(SupportInterface $supportInterface)
    {
        return $this->supportInterface = $supportInterface;
    }

    public function support(Request $request):
    \Illuminate\Http\RedirectResponse
    {
        $data = [
            "ticket_number" => uniqid(),
            "subject" => $request->get("subject"),
            "body" => $request->get("body"),
            "attachment" => $request->file("attachment")
        ];

        $body = $this->supportInterface->take_support($data);
        return back();
    }
}
