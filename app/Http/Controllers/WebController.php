<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Books;
use App\Models\Publisher;
use App\Models\Categories;
use App\Models\BookCategories;

class WebController extends Controller
{
    public function home() {
        $books = Books::all();
        $categories = Categories::all();
        return view('home', [
            'books' => $books,
            'title' => 'Books List',
            'categories' => $categories
        ]);
    }

    public function detail($id) {
        $book = Books::findOrFail($id);
        $categories = Categories::all();
        return view('detail', [
            'book' => $book,
            'title' => 'Book Details',
            'categories' => $categories
        ]);
    }

    public function publisher() {
        $publishers = Publisher::all();
        $categories = Categories::all();
        return view('publisher', [
            'publishers' => $publishers,
            'title' => 'Publisher List',
            'categories' => $categories
        ]);
    }

    public function filterCategory ($category) {

        $books = Books::whereHas('categories', function($query) use ($category) {
            $query->where('category_id', $category);
        })->get();
       

        $categories = Categories::all();
        return view('category', [
            'books' => $books,
            'title' => $categories->find($category)->name,
            'categories' => $categories
        ]);
    }

    public function publisherDetail($id) {
        $books = Books::where('publisher_id', $id)->get();
        $publishers = Publisher::find($id);
        $categories = Categories::all();
        return view('publisherdetail', [
            'books' => $books,
            'publisher' => $publishers,
            'title' => $publishers->name,
            'categories' => $categories
        ]);
    }

    public function contact() {

        $categories = Categories::all();
        return view('contact', [
            'title' => 'Contact',
            'categories' => $categories
        ]);
    }
}
