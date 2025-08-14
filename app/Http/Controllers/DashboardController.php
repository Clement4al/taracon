<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\View\View;

class DashboardController extends Controller
{
//    public function show(): View
//    {
//        $orders = Order::take(15)->latest()
//            ->unless(user()->isAdmin())
//            ->whereBelongsTo(user())
//            ->get();
//
//        $customers_count    = User::customer()->count();
//        $products_count     = Product::count();
//        $orders_count       = Order::count();
//        $awaiting_delivery  = Order::whereNull('delivered_at')->count();
//
//        return view('dashboard.show', compact([
//            'orders', 'customers_count', 'products_count', 'orders_count', 'awaiting_delivery'
//        ]));
//    }
    public function show(): View
    {
        return view('dashboard.show');
    }
}
