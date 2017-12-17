<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $data["categories"] = $categories;
        return view("admin.categories.index", $data);
    }

    public function create()
    {
        return view("admin.categories.create");
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'description' => 'required|min:10',
        ]);
        $category = new Category();
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->save();
        return redirect('/admin/categories');
    }

    public function show($category_id)
    {
        try {
            $category = Category::findOrFail($category_id);
        } catch (Exception $e) {
            return abort(404);
        }
        $data['category'] = $category;
        return view("admin.categories.show", $data);
    }

    public function edit($category_id)
    {
        try {
            $category = Category::findOrFail($category_id);
        } catch (Exception $e) {
            return abort(404);
        }
        $data['category'] = $category;
        return view("admin.categories.edit", $data);
    }

    public function update(Request $request, $category_id)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'description' => 'required|min:30',
        ]);
        try {
            $category = Category::findOrFail($category_id);
        } catch (Exception $e) {
            return abort(404);
        }
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->save();
        return redirect('/admin/categories/edit/' . $category_id);
    }

    public function destroy($category_id)
    {
        try {
            Category::destroy($category_id);
        } catch (Exception $e) {
            return abort(404);
        }
        return redirect('/admin/categories');
    }
}
