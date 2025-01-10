<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
//use Illuminate\Support\Str;



class DataController extends Controller
{
    public function store(Request $request){
         // Validate the incoming request
    $request->validate([
        'name' => 'required|min:3|unique:categories,name', // Ensure unique names
        'description' => 'nullable|string',
    ]);

    // Create a new Category instance
    $category = new Category();
    $category->name = $request->name;
    $category->description = $request->description ;
    //$category->slug = Str::slug($request->name, '-'); // Generate slug

    // Save the instance to the database
    $category->save();

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Category created successfully!');
    }

    public function index(){
    // Fetch all categories from the database
    $categories = Category::all();

    // Pass the categories to the view
    return view('categories', compact('categories'));
    }
    public function create(){
        return view("create");
    }
}
