<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Order::class);
    }

    public function index(Request $request): View
    {
        $orders = Order::latest()
            ->with('products', 'transactions')
            ->search($request->search)
            ->paginate();

        return view('orders.index', compact('orders'));
    }

    public function show(Order $order): View
    {
        $order->load([
            'products.locations' => fn ($query) => $query->where('quantity', '>', 0),
            'paidTransactions.author',
        ]);

        return view('orders.show', compact('order'));
    }
}
