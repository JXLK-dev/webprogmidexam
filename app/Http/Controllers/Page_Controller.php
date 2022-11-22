<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Categories;
use Illuminate\Http\Request;

class Page_Controller extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();
        return view('content_page/index')->with('categories', $categories);
    }
    public function book_detail()
    {
        $categories = Category::all();
        return view('content_page/book_detail')->with('categories', $categories);
    }
    public function category($cat_id)
    {
        $categories = Category::all();
        $bookCategory = Category::where('id', $cat_id)->get()[0];
        $books = $bookCategory->books;
        return view('content_page/category')->with('categories', $categories)->with('books', $books);
    }
    public function publishers()
    {
        $categories = Category::all();
        return view('content_page/publishers')->with('categories', $categories);
    }
    public function contact()
    {
        $categories = Category::all();
        return view('content_page/contact')->with('categories', $categories);
    }
}
