<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BalanceWithdrawRequest;
use App\Models\Order;
use App\Models\OrderProduct;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VendorController extends Controller
{
    public function dashboard()
    {

        $userId = Auth::user()->id; // Assuming you're getting the user's ID from authentication
        $twoWeekAgo = Carbon::now()->subWeeks(2);

        $totalBalance = OrderProduct::where('vendor_id', $userId)
            ->sum('unit_price');

        $availbalance = OrderProduct::where('vendor_id', $userId)
            ->where('created_at', '>=', $twoWeekAgo)
            ->sum('unit_price');

        return view('vendor.dashboard.dashboard', compact('totalBalance', 'availbalance'));
    }

    public function withdraw()
    {
        return view('vendor.dashboard.withdraw');
    }

    public function withdrawSubmit(Request $request)
    {
        $balance = new BalanceWithdrawRequest();
        $balance->vendor_id = Auth::user()->id;
        $balance->amount = $request->amount;
        $balance->bkash = $request->bkash;

        $balance->save();

        toastr('Request Submitted', 'success');
        return redirect()->route('vendor.dashboard');
    }
}
