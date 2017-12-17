<?php

namespace App\Http\Controllers;

use App\Good;
use Illuminate\Http\Request;

class GoodController extends Controller
{
    public function index()
    {
        $goods = Good::all();
        $data["goods"] = $goods;
        return view("admin.goods.index",$data);
    }
    public function create()
    {
        $categories = \App\Category::all();
        $data['categories'] = $categories;
        return view("admin.goods.create",$data);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:5',
            'description' => 'required|min:10',
            'price' => 'required|numeric',
            'category' => 'numeric',
        ]);
        $good = new Good();
        $good->name = $request->input('name');
        $good->description = $request->input('description');
        $good->price = $request->input('price');
        $good->category_id = $request->input('category');
        if($request->hasFile('photo')) {
            $file = $request->file('photo');
            $file->move(public_path() . '/img',$request->file('photo')->getClientOriginalName());
            $good->photo = 'img/' . $request->file('photo')->getClientOriginalName();
        }
        $good->save();
        return redirect('/admin/goods');
    }
    public function show($good_id)
    {
        try {
            $good = Good::findOrFail($good_id);
        } catch (Exception $e) {
            return abort(404);
        }
        $data['good'] = $good;
        return view("admin.goods.show", $data);
    }
    public function edit($good_id)
    {
        try {
            $good = Good::findOrFail($good_id);
        } catch (Exception $e) {
            return abort(404);
        }
        $data['good'] = $good;
        $categories = \App\Category::all();
        $data['categories'] = $categories;
        return view("admin.goods.edit", $data);
    }
    public function update(Request $request, $good_id)
    {
        $this->validate($request, [
            'name' => 'required|min:5',
            'description' => 'required|min:30',
            'price' => 'required|numeric',
            'category' => 'numeric',
        ]);
        try {
            $good = Good::findOrFail($good_id);
        } catch (Exception $e) {
            return abort(404);
        }
        $good->name = $request->input('name');
        $good->description = $request->input('description');
        $good->price = $request->input('price');
        $good->category_id = $request->input('category');
        if($request->hasFile('photo')) {
            $file = $request->file('photo');
            $file->move(public_path() . '/img',$request->file('photo')->getClientOriginalName());
            $good->photo = 'img/' . $request->file('photo')->getClientOriginalName();
        }
        $good->save();
        return redirect('/admin/goods/edit/' . $good_id);
    }
    public function destroy($good_id)
    {
        try {
            Good::destroy($good_id);
        } catch (Exception $e) {
            return abort(404);
        }
        return redirect('/admin/goods');
    }
}
