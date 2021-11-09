<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('admin.order.index', [
            'models' => Order::query()->latest()->get()
        ]);
    }

    public function destroy(Order $order)
    {
        $order->delete();

        return back();
    }
}
