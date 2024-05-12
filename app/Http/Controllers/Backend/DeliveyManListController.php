<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\DeliveryManListDataTable;
use App\Http\Controllers\Controller;
use App\Models\Delivery_boy;
use Illuminate\Http\Request;

class DeliveyManListController extends Controller
{
    public function index(DeliveryManListDataTable $dataTable)
    {
        return $dataTable->render('admin.delivery-man-list.index');
    }

    public function changeStatus(Request $request)
    {
        $deliverMan = Delivery_boy::findOrFail($request->id);
        $deliverMan->status = $request->status == 'true' ? 'active' : 'inactive';
        $deliverMan->save();

        return response(['message' => 'Status has been updated!']);
    }
}
