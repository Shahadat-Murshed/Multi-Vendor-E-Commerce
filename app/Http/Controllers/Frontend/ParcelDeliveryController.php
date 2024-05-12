<?php

namespace App\Http\Controllers\Frontend;

use App\DataTables\DeliveryListDataTable;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class ParcelDeliveryController extends Controller
{
    public function index(DeliveryListDataTable $dataTable)
    {
        return $dataTable->render('frontend.dashboard.parcel.index');
    }
}
