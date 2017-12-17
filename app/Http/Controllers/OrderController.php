<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Illuminate\Support\Facades\Auth;
use League\Flysystem\Exception;
use App\Http\Requests\StoreOrder;

class OrderController extends Controller
{
    public function store(StoreOrder $request)
    {
        $order = new Order();
        if (Auth::check()) {
            $order->user_id = Auth::user()->getAuthIdentifier();
        } else {
            $order->user_id = 0;
        }
        $order->good_id = $request->input('good_id');
        $order->price = $request->input('price');
        $order->user_name = $request->input('name');
        $order->email = $request->input('email');
        $order->save();
        $subject = "Заказ от пользователя $order->user_name";
        $message = "Пользователь $order->user_name с email $order->email оставил заказ на товар с id = $order->good_id";
        $email = \App\Email::first();
        mail($email->email, $subject, $message);
        if (Auth::User()) {
            return response()->json([
                'success' => true,
                'message' => 'Ваша заявка успешно принята.<br />Вы можете просмотреть ее на странице <a href="/orders">Мои заказы.</a>'
            ], 200);
        } else {
            return response()->json([
                'success' => true,
                'message' => 'Ваша заявка успешно принята.'
            ], 200);
        }
    }
    public function index()
    {
        $orders = Order::all();
        $data["orders"] = $orders;
        return view("admin.orders",$data);
    }
}
