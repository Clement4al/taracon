<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class DispatchedOrderController extends Controller
{
    public function store(Request $request, Order $order)
    {
        $this->authorize('update', $order);

        $order->products()->syncWithoutDetaching($request->products);

        return response()->api('Dispatched Successfully');
    }
}
