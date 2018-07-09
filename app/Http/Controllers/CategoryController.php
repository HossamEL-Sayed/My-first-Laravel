<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Task;

class CategoryController extends Controller
{
    //main page

    public function index()
    {
        $categories = Category::all();

    return view('categories.category', compact('categories'));
	}

    //create new category

    public function createCat()
    {
    return view('categories.createCat');
    }

    public function storeCat()
    {
        $this->validate(request(),[

            'category' => 'required'

        ]);

        category::create([

            'category' => request('category')

        ]);

        return redirect('/category');
    }

    //read the category tasks

    public function showCat(Category $category)
    {

    return view('categories.showCat', compact('category'));
    }

    //edit the category name

    public function editCat(Category $category)
    {
    return view('categories.editCat', compact('category'));
    }

    public function updateCat(Category $category)
    {

        $this->validate(request(),[

            'category' => 'required'

        ]);

        $category->category = request('category');

        $category->save();

        return redirect('/category');
    }

    //delete the category

    public function deleteCat($id)
    {
        Category::find($id)->delete();

    return redirect('/category');
    }
}