<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Good;
use App\Category;
use App\Order;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    protected function allPages(&$data)
    {
        $categories = Category::all();
        $data['categories'] = $categories;
        $rand_product = Good::orderBy('created_at')->take((rand(1, 12)))->get()->last();
        $data['rand_product'] = $rand_product;
    }

    public function index()
    {
        $data['title'] = 'Последние товары';
        $data['title_page'] = 'Главная страница';
        $products = Good::orderBy('created_at', 'desc')->paginate(6);
        $data['products'] = $products;
        $this->allPages($data);
        return view("main", $data);
    }

    public function showAdminPage()
    {
        if(Auth::User() && Auth::User()->role_id == 2) {
            return view('admin.layouts.admin');
        } else {
            return redirect('/');
        }
    }
    
    public function category($category_id)
    {
        try {
            $category = Category::findOrFail($category_id);
        } catch (Exception $e) {
            return abort(404);
        }
        $data['title'] = 'Игры в разделе ' . $category->name;
        $data['title_page'] = $category->name;
        $products = Good::where('category_id', $category_id)->paginate(6);
        $data['products'] = $products;
        $this->allPages($data);
        return view("main", $data);
    }

    public function product($prod_id)
    {
        try {
            $product = Good::findOrFail($prod_id);
        } catch (Exception $e) {
            return abort(404);
        }
        $data['product'] = $product;
        $data['title'] = $product->name . ' в разделе ' . $product->category->name;
        $data['title_page'] = $product->name;
        $this->allPages($data);
        return view("product", $data);
    }

    public function orders()
    {
        $orders = Order::where("user_id", Auth::User()->getAuthIdentifier())->paginate(6);
        $data['orders'] = $orders;
        $data['title'] = 'Мои заказы';
        $data['title_page'] = 'Мои заказы';
        $this->allPages($data);
        return view("orders", $data);
    }
}
