<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $orders = Order::query();

        if ($search) {
            $orders->where('customer_name', 'like', '%' . $search . '%')
                ->orWhere('customer_email', 'like', '%' . $search . '%')
                ->orWhere('customer_phone', 'like', '%' . $search . '%');
        }

        $orders = $orders->get();

        return view('orders.index', compact('orders'));
    }
}
