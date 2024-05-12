<?php

namespace App\Http\Controllers\Frontend;

use App\DataTables\DeliveryListDataTable;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ParcelDeliveryController extends Controller
{
    public function index(DeliveryListDataTable $dataTable)
    {
        return $dataTable->render('frontend.dashboard.parcel.index');
    }
    public function changeStatus(Request $request)
    {
        $order = Order::findOrFail($request->id);
        $order->order_status = $request->status == 'true' ? 'out_for_delivery' : 'pending';
        $order->save();

        return response(['message' => 'Status has been updated!']);
    }

    public function deliver($id)
    {
        $order = $id;
        return view('frontend.dashboard.parcel.deliver', compact('id'));
    }

    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $otp_g = $request->otp_g;
        $otp = $request->otp;
        if ($otp_g === $otp) {

            $order->order_status = 'delivered';
            $order->save();

            toastr('Delivered Successfully!', 'success');
            return redirect()->route('user.parcel.index');
        } else {
            toastr('Wrong OTP!', 'error');
            return redirect()->back();
        }
    }
}
