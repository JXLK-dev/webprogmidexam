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
        $books = Book::all();
        return view('content_page/index')->with('categories', $categories)->with('books', $books);
    }
    public function book_detail($book_id)
    {
        $categories = Category::all();
        $b = Book::all();
        $book = Book::where('id', $book_id)->get()[0];
        // dd($book);
        return view('content_page/book_detail')->with('categories', $categories)->with('book', $book);
    }
    public function category($cat_id)
    {
        $categories = Category::all();
        $bookCategory = Category::where('id', $cat_id)->get()[0];
        $books = $bookCategory->books;
        return view('content_page/category')->with('categories', $categories)->with('books', $books)->with('catName', $bookCategory);
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
