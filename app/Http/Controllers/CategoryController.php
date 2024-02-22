<?php


namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){

        $category_data = Category::all();
        
        return view('admin.category.index', compact('category_data'));
    }

    public function create(){
       
        return view('admin.category.create');
    }

    public function destroy($id){
        
        Category::find($id)->delete();
        return redirect('/category');
    }

    public function store(Request $request){
        category::create([
            'name' => $request->name,

        ]);
        return redirect('/category');
    }
}
