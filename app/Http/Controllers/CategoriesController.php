<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoriesController extends Controller
{
    public function index()
    {
        // $data = [
        //     [
        //         "id" => "8e1a6be-c042-4efd-a199-7d45b99fdcc2",
        //         "name" => "cellphone"
        //     ],
        //     [
        //         "id" => "243d6c9e-4a86-485c-bde6-2a83c2b306be",
        //         "name" => "tablet"
        //     ],
        //     [
        //         "id" => "2ec09c46-99b1-4cf5-a1cb-243c4d6ffc9e",
        //         "name" => "wearable"
        //     ],
        //     [
        //         "id" => "1d17a400-d1e4-4fa1-926a-2ecfdc3266d4",
        //         "name" => "laptop"
        //     ],
        //     [
        //         "id" => "b99448e1-8e60-48a3-b379-1d1e6973c400",
        //         "name" => "accessories"
        //     ]
        // ];

        $data = Category::all();
        // dd($categories);
        return view('admin.categories.index', compact('data'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:3',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        $categories = Category::create([
            'name' => $request->name
        ]);

        return redirect()->route('categories.index');
    }

    public function edit($id)
    {
        $category = Category::find($id);

        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:3',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        $category = Category::find($id);

        $category->update([
            'name' => $request->name
        ]);

        return redirect()->route('categories.index');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect()->route('categories.index');
    }
}
