<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function view_category(){
        $category = Category::all();
        return view('admin.category', compact('category'));
    }

    public function categoryStore(Request $request){
        $data = new Category;
        $data->category_name = $request->category;
        $data->save();


        return redirect()->back()->with('message', 'Category Saved Successfully');
    }

    public function delete_category($id){
        $category =  Category::find($id);

        $category->delete();

        return redirect()->back()->with('message', 'Category Deleted Successfully');
    }
}
