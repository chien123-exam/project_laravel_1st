<?php

namespace App\Http\Controllers;

use App\Mail\MailCart;
use App\Models\Course;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index()
    {
        $cart = Session::get('cart', []);

        $courseIds = array_column($cart, 'id');

        $coursesInCart = Course::whereIn('id', $courseIds)->get();

        // $cartItemCount = count($cart); // Đếm số lượng sản phẩm trong giỏ hàng

        return view('carts.index', compact('coursesInCart'));
    }

    public function store(Request $request, $id)
    {
        $course = Course::find($id);
        if (!$course) {
            return redirect()->back()->with('error', 'Không tìm thấy khóa học');
        }
        $cart = Session::get('cart', []);
        $quantity = $request->input('quantity', 1);
        if (array_key_exists($id, $cart)) {
            $cart[$id]['quantity'] += $quantity;
        } else {
            $cart[$id] = [
                'id' => $course->id,
                'name' => $course->name,
                'price' => $course->price,
                'quantity' => $quantity,
            ];
        }
        Session::put('cart', $cart);
        Session::flash('message', 'Thêm vào giỏ hàng thành công!');
        return redirect()->back();
    }

    public function destroy($id)
    {
        $cart = Session::get('cart', []);
        if (array_key_exists($id, $cart)) {
            unset($cart[$id]);
            Session::put('cart', $cart);
            Session::flash('success', 'Xóa khỏi giỏ hàng thành công!');
        }
        return redirect()->route('cart.index');
    }

    public function checkout(Request $request)
    {
        $cart = Session::get('cart', []);
        $totalPrice = 0;
        $courseIds = [];

        foreach ($cart as $item) {
            $totalPrice += $item['price'] * $item['quantity'];
            $courseIds[] = $item['id'];
        }

        // Kiểm tra xem các course_id có tồn tại trong bảng "courses"
        $existingCourseIds = Course::whereIn('id', $courseIds)->pluck('id')->toArray();

        if (count($existingCourseIds) !== count($courseIds)) {
            // Có ít nhất một course_id không tồn tại
            return redirect()->route('cart.index')->with('error', 'Một số khóa học không tồn tại.');
        }

        $order = new Order();
        $order->user_id = auth()->id();
        $order->order_date = now();
        $order->total_price = $totalPrice;
        $order->shipping_address = $request->input('shipping_address');
        $order->status = rand(1, 2);

        // Tương tự, lấy tên khóa học từ cơ sở dữ liệu
        $courseNames = Course::whereIn('id', $courseIds)->pluck('name')->toArray();
        $order->course_name = implode(', ', $courseNames);

        $order->customer_name = $request->input('shipping_name');
        $order->customer_email = $request->input('customer_email');
        $order->customer_phone = $request->input('customer_phone');

        $order->save();

        foreach ($cart as $item) {
            // Kiểm tra xem course_id có tồn tại trong bảng "courses" trước khi thêm vào "order_details"
            if (in_array($item['id'], $existingCourseIds)) {
                $orderDetail = new OrderDetail();
                $orderDetail->order_id = $order->id;
                $orderDetail->course_id = $item['id'];
                $orderDetail->quantity = $item['quantity'];
                $orderDetail->price = $item['price'];

                $orderDetail->save();
            }
        }

        session()->forget('cart');

        return redirect()->route('home-page.index')->with('success', 'Thanh toán thành công.');
    }


    public function success(Request $request)
    {
        Mail::to('nguyentienchientlu2002@gmail.com')->send(new MailCart);

        session()->forget('cart');

        return redirect()->route('homepage.index')->with('success', 'Thanh toán thành công');
    }
}

